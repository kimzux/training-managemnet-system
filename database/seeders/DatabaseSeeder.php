<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('permissions')->insert([
            [
                'name' => 'view dashboard',
                'guard_name' => 'web',
            ],

            [
                'name' => 'view user',
                'guard_name' => 'web',
            ],
            [
                'name' => 'assign userrole',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create user',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Delete user',
                'guard_name' => 'web',
            ],

            [
                'name' => 'edit user',
                'guard_name' => 'web',
            ],
            [
                'name' => 'update user',
                'guard_name' => 'web',
            ],
            [
                'name' => 'view role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create role',
                'guard_name' => 'web',
            ],

            [
                'name' => 'delete role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'update role',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create training',
                'guard_name' => 'web',
            ],
            [
                'name' => 'view training',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit training',
                'guard_name' => 'web',
            ],
            [
                'name' => 'update training',
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete training',
                'guard_name' => 'web',
            ],
            [
                'name' => 'create trainer',
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit trainer',
                'guard_name' => 'web',
            ],
            [
                'name' => 'update trainer',
                'guard_name' => 'web',
            ],

            [
                'name' => 'delete trainer',
                'guard_name' => 'web',
            ],
            [
                'name' => 'view trainer',
                'guard_name' => 'web',
            ],
            [
                'name' => 'view attendees',
                'guard_name' => 'web',
            ],
            [
                'name' => 'show attendee',
                'guard_name' => 'web',
            ],
            [
                'name' => 'view attendeetrained',
                'guard_name' => 'web',
            ],
            
            
        ]);
        $this->call(AdminSeeder::class);
    }
}
