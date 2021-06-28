<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;

    protected $table = 'lawyers';
    protected $primaryKey = 'lawyer_id';
    protected $fillable = [
        'title',
        'phone',
        'avatar',
        'lawyer_firm_name',
        'call_url',
        'video_url',
        'deposition_url',
        'lawyer_id'
    ];

    public function user_details(){
        return $this->belongsTo(User::class, 'lawyer_id');
    }

    public function lawyerClients(){
        return $this->hasMany(Client::class, 'lawyer_id', 'id');
    }
}
