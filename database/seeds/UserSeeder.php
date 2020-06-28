<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Model\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Ömer',
            'lastname' => 'ERTAN',
            'password' => Hash::make('123'),
            'email' => 'test@gmail.com',
            'birthday' => '10.04.1995',
            'role_id' => Role::where('rolename', 'Admin')->get()->first()->id,

        ]);
    }
}
