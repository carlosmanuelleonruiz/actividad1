<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;

class userTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'nombres'=>'carlos manuel',
                'apellidos'=>'leon ruiz',
                'correo'=>'manuelleon2308',
                'telefono'=>'3142513842'
            ]);
    }
}
