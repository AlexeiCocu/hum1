<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lawyer = User::select('users.id',
            'users.first_name',
            'users.last_name',
            'users.email',
            'users.role_id',
            'lawyers.title',
            'lawyers.phone',
            'lawyers.lawyer_description',
            'lawyers.avatar',
            'lawyers.lawyer_firm_name',
            'lawyers.call_url',
            'lawyers.video_url',
            'lawyers.deposition_url',
            'lawyers.lawyer_id'
        )
            ->leftJoin('lawyers', 'lawyers.lawyer_id', 'users.id')
            ->where('lawyers.lawyer_id', $id)
            ->where('users.role_id', 2)
            ->first();


        return view('lawyer/pages/profile/show', compact('lawyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $lawyer = User::select('users.id',
            'users.first_name',
            'users.last_name',
            'users.email',
            'users.role_id',
            'lawyers.title',
            'lawyers.phone',
            'lawyers.lawyer_description',
            'lawyers.avatar',
            'lawyers.lawyer_firm_name',
            'lawyers.call_url',
            'lawyers.video_url',
            'lawyers.deposition_url',
            'lawyers.lawyer_id'
        )
            ->leftJoin('lawyers', 'lawyers.lawyer_id', 'users.id')
            ->where('users.role_id', 2)
            ->where('users.id', $id)
            ->first();


        return view('lawyer/pages/profile/edit', compact('lawyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'first_name' => 'sometimes',
            'last_name' => 'sometimes',
            'email' => 'sometimes',
            'title' => 'sometimes',
            'phone' => 'sometimes',
            'lawyer_firm_name' => 'sometimes',
            'lawyer_description' => 'sometimes',
            'call_url' => 'sometimes',
            'video_url' => 'sometimes',
            'deposition_url' => 'sometimes',
            'avatar' => 'sometimes|image|max:1000',
            'current_password' => 'sometimes|password|confirmed',
        ]);


//        if (Hash::check($request->password, Auth::user()->password) ) {
//            if($request->new_password == $request->password_confirmation){
//                $data['password'] = Hash::make($request->password_confirmation);
//            }
//        }

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['Current provided password dont match with our records'],
            ]);
        }else{
            $data['password'] = Hash::make($request->password_confirmation);
        }

        $lawyer = User::where('id', $id)->first();

        if ($request->hasFile('avatar')) {
            Storage::disk('avatar')->delete($lawyer->avatar);
            $data['avatar'] = Storage::disk('avatar')->put('/', $request->file('avatar'));
        }

        $lawyer->update($data);

        $lawyer_details = Lawyer::where('lawyer_id', $id)->first();
        $lawyer_details->update($data);


        return redirect()->route('lawyer-profile.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
