<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = New Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Larapus";
        $adminRole->save();

        $memberRole = New Role;
        $memberRole->name = "member";
        $memberRole->display_name = "member larapus";
        $memberRole->save();

        //membuat sample admin
        $admin = New User;
        $admin->name = "Admin Larapus";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("rahasia");
        $admin->save();
        $admin->attachRole($adminRole);
        //membuat sample member
        $member = New User;
        $member->name = "Member Larapus";
        $member->email = "member@gmail.com";
        $member->password = bcrypt("rahasia");
        $member->save();
        $member->attachRole($memberRole);
    }
}
