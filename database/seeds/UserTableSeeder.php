<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Gabriel Carrillo';
        $user->email = 'gcarrillo@indexcol.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Jose Rodriguez';
        $user->email = 'jrodriguez@indexcol.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
