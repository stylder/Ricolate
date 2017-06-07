<?php

use Illuminate\Database\Seeder;
use fooCart\src\User;

class UsersTableSeeder extends Seeder{

    public function run(){
        User::create(array(
            'name'          => 'Santigo García Cabral',
            'email'         => 'stylder@gmail.com',
            'password'      =>  bcrypt('demo123'),
            'role'          =>  0,
            'active'        =>  true
        ));
        User::create(array(
            'name'          => 'Alan',
            'email'         => 'demo.user2@justinc.me',
            'password'      =>  bcrypt('admin123'),
            'role'          =>  0,
            'active'        =>  true
        ));
    }
}