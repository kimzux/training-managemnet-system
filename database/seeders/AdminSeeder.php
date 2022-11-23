<?php

namespace Database\Seeders;
use App\models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $user = User::create([

            'name' => 'fanisi program', 

            'email' => 'admin@fanisiprogram.com',

            'password' => bcrypt('fanisiprogarm@2022')

        ]);

    

       
        $role = Role::create(['name' => 'Super Admin']);

     

        $permissions = Permission::pluck('id','id')->all();

   

        $role->syncPermissions($permissions);

     

        $user->assignRole([$role->id]);

    }

}
