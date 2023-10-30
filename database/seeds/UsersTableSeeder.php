<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('role_user')->truncate();

        $adminRole = Role::where('firstname','admin')->first();
        $userRole = Role::where('firstname','user')->first();

        $admin = User::create([
              'firstname' => 'Admin',
              'lastname' => 'User',
              'mobile'  => '08040002000',
              'gender' => 'male',
              'email' => 'admin@admin.com',
              'password' => Hash::make('password'),
              'address'  => 'Admin Street Lane',
        ]);
             $user = User::create([
              'firstname' => 'Generic',
              'lastname' => 'User',
              'email' => 'user@user.com',
              'mobile'  => '09030006000',
              'gender' => 'male',
              'password' => Hash::make('password'),
              'address'  => 'User Street Lane',
        ]);

        $admin->roles()->attach($adminRole); 
        $user->roles()->attach($userRole);
 
    }
}
