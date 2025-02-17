<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run(): void
    {
        $users = collect([
            [
                'name' => 'Admin',
                'email' => 'admin@touristelokal.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'super-admin',
            ],
        ]);

        $users->map(function ($user) {
            $user = collect($user);
            $newUser = User::create($user->except('role')->toArray());
            $newUser->assignRole($user['role']);
        });
    }
}
