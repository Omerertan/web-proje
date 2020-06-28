<?php

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
        DB::table('roles')->insert([
            'rolename' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'rolename' => 'Üye',
        ]);
        DB::table('roles')->insert([
            'rolename' => 'Misafir',
        ]);
    }
}
