<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $fillable = [
        'client_id',
        'lawyer_id',
        'client_f_name',
        'client_l_name',
        'address',
        'state',
        'zip_code',
        'home_phone',
        'cell_phone',
    ];


    public function user()
    {
        $this->belongsTo(User::class);
    }


}
