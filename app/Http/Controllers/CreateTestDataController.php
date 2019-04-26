<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class CreateTestDataController extends Controller
{
    public function createUsers(){
        $users = [
          ['firstname' => 'Фамилия','name' => 'admin','email' => 'admin@example.ru'],
          ['firstname' => 'Фамилия','name' => 'user','email' => 'user@example.ru'],
          ['firstname' => 'Фамилия','name' => 'test','email' => 'test@example.ru',],
          ['firstname' => 'Фамилия','name' => 'alex','email' => 'alex@example.ru',],
          ['firstname' => 'Фамилия','name' => 'ivan','email' => 'ivan@example.ru',],
        ];
        $password = '12345678';
        foreach ($users as $user){
            $new = User::create($user);
            $new->password = Hash::make($password);
            $new->save();
        }


    }

}
