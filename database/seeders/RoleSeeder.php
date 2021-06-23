<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'label' => 'Admin',
            'role' => 'admin'
        ]);

        Role::create([
            'label' => 'Lawyer',
            'role' => 'lawyer'
        ]);

        Role::create([
            'label' => 'Client',
            'role' => 'client'
        ]);
    }
}
