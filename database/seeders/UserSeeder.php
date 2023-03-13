<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->fullname = 'Claudia Arenas Sanchez';
        $user->birthdate = '1985-05-04';
        $user->email = 'claudiaj.arenass@autonoma.edu.co';
        $user->address = '';
        $user->password = bcrypt('admin');
        $user->role_id = 1;
        $user->save();

            
         

        $user = new User;
        $user->fullname = 'Sara Diaz';
        $user->birthdate = '1992-05-04';
        $user->email = 'sara@autonoma.edu.co';
        $user->address = '';
        $user->password = bcrypt('12345');
        $user->role_id = 2;
        $user->save();

    }

}
