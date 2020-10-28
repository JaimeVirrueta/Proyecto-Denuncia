<?php

use Illuminate\Database\Seeder;
use App\Entities\Admin\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();

      
      $root = new User();
      $root->email = 'root@denuncia.com';
      $root->username = 'root';
      $root->first_name ='Root';
      $root->password = 'password';
      $root->created_by = 1;
      $root->updated_by = 1;
      $root->save();

      $user = new User();
      $user->email = 'admin@denuncia.com';
      $user->username = 'admin';
      $user->first_name ='admin';
      $user->last_name ='admin';
      $user->password = bcrypt('password');
      $user->created_by = $root->id;
      $user->updated_by = $root->id;
      $user->save();

  factory(User::class, 10)->create ([

      'created_by' => $user->id,
      'updated_by' => $user->id,
      ]);

  }
 }
     