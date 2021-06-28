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
        'case_nr',
        'co_counsel_client_id_nr',
        'case_type',
        'case_status',
        'docusign_url',
        'injured_party_f_name',
        'injured_party_l_name',
        'client_f_name',
        'client_l_name',
        'address',
        'state',
        'zip_code',
        'home_phone',
        'cell_phone',
        'diagnosis',
        'date_of_diagnosis',
        'tentative_sol',
        'sol_notes',
        'treating_doctor',
        'diagnosing_hospital',
        'date_of_death',
        'cause_of_death',
        'next_of_kin',
        'rel_of_the_client_to_the_deceased',
        'date_married',
        'exposure_history_notes',
        'call_notes',
        'co_counsel_notes',
        'referred_to'
    ];


    public function user()
    {
        $this->belongsTo(User::class);
    }


}
