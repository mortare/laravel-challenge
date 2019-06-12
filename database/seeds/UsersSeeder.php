<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          'name'=>"Estevao",
          'email'=>"admin@admin.com",
          'password'=>bcrypt("admin"),
        ];
        if(User::where('email','=',$data['email'])->count()){
          $user = User::where('email','=',$data['email'])->first();
          $user->update($data);
          echo "User Update!";
        }else{
          User::create($data);
          echo "User Create!";
        }
    }
}
