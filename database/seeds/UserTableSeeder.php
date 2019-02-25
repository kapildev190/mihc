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
		$role_admin = Role::where('name', 'admin')->first();
		//$role_member  = Role::where(‘name’, ‘member’)->first();

		$admin = new User();
		$admin->name = 'Sanjeev';
		$admin->email = 'mihc@yopmail.com';
		$admin->mobile = '8360375885';
		$admin->password = bcrypt('sanjeev!@#$%');
		$admin->save();
		$admin->roles()->attach($role_admin);

		/*$member = new User();
	    $member->name = 'member1';
	    $member->email = 'member1mihc@yopmail.com';
	    $member->password = bcrypt('member1mihc!@#$%');
	    $member->save();
	    $member->roles()->attach($role_member);*/
	}
}
