<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawyers = User::select('users.id',
            'users.first_name',
            'users.last_name',
            'users.email',
            'users.role_id',
            'lawyers.title',
            'lawyers.phone',
            'lawyers.avatar',
            'lawyers.lawyer_firm_name',
            'lawyers.call_url',
            'lawyers.video_url',
            'lawyers.deposition_url',
            'lawyers.lawyer_id'
        )
            ->leftJoin('lawyers', 'lawyers.lawyer_id', 'users.id')
            ->where('users.role_id', 2)
            ->get();

        return view('lex_admin/pages/lawyers/index', compact('lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lex_admin/pages/lawyers/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
        ]);

        $data['role_id'] = 2;
        $data['password'] = Hash::make(123);

        $user = User::create($data);

        $title = new Lawyer(['title' => 'Lawyer']);
        $user->lawyerDetails()->save($title);


        return redirect()->route('admin-lawyers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
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
            'lawyers.avatar',
            'lawyers.lawyer_firm_name',
            'lawyers.lawyer_description',
            'lawyers.call_url',
            'lawyers.video_url',
            'lawyers.lawyer_description',
            'lawyers.deposition_url',
            'lawyers.lawyer_id'
        )
            ->leftJoin('lawyers', 'lawyers.lawyer_id', 'users.id')
            ->where('users.role_id', 2)
            ->where('users.id', $id)
            ->first();

        return view('lex_admin/pages/lawyers/show', compact('lawyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
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
            'lawyers.avatar',
            'lawyers.lawyer_firm_name',
            'lawyers.call_url',
            'lawyers.video_url',
            'lawyers.deposition_url',
            'lawyers.lawyer_description',
            'lawyers.lawyer_id'
        )
            ->leftJoin('lawyers', 'lawyers.lawyer_id', 'users.id')
            ->where('users.role_id', 2)
            ->where('users.id', $id)
            ->first();

        return view('lex_admin/pages/lawyers/edit', compact('lawyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
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
            'password' => 'confirmed'
        ]);

        if (Hash::check($request->current_password, Auth::user()->password) ) {
            if($request->new_password == $request->password_confirmation){
                $data['password'] = Hash::make($request->password_confirmation);
            }
        }

//        if (!Hash::check($request->current_password, Auth::user()->password)) {
//            throw ValidationException::withMessages([
//                'current_password' => ['Current provided password dont match with our records'],
//            ]);
//        }

        $lawyer = User::where('id', $id)->first();

        if ($request->hasFile('avatar')) {
            Storage::disk('avatar')->delete($lawyer->avatar);
            $data['avatar'] = Storage::disk('avatar')->put('/', $request->file('avatar'));
        }

        $lawyer->update($data);

        $lawyer_details = Lawyer::where('lawyer_id', $id)->first();
        $lawyer_details->update($data);

        return redirect()->route('admin-lawyers.show', $id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::select('users.id')
            ->where('users.id', $id)
            ->where('users.role_id', 2)
            ->first();

        Storage::disk('avatar')->delete($user->avatar);
        User::destroy($id);

        return redirect()->route('admin-lawyers.index');
    }
}
