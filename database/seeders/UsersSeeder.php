<?php

namespace Database\Seeders;

use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('roles')->delete();

        $userId = DB::table('users')->insert([
            'name' => 'Admin',
            'surname' => 'User',
            'email' => 'admin@kesta.me',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'),
            'created_at' => Carbon::now(),
        ]);



        $adminRoleId = DB::table('roles')->insert([
            'name' => 'admin',
            'created_at' => Carbon::now(),
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
            'created_at' => Carbon::now(),
        ]);

        DB::table('role_user')->insert([
            'user_id' => $userId,
            'role_id' => $adminRoleId
        ]);
    }
}
