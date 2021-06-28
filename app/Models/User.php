<?php

namespace App\Models;


use App\Http\Controllers\admin\LawyerController;
use App\Http\Controllers\lawyer\ClientController;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }

    public function hasRole($role)
    {
        return $this->role()->where('role', $role)->first() ? true : false;
    }

    public function lawyerDetails(){
        return $this->hasOne(Lawyer::class, 'lawyer_id');
    }

    public function clientDetails(){
        return $this->hasOne(Client::class, 'client_id');
    }

    public function history()
    {
        return $this->hasOne(History::class, 'client_id');
    }
}
