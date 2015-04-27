<?php

use Illuminate\Database\Seeder;
use App\Users;

class UserTableSeeder extends Seeder {

  public function run()
  {
    DB::table('users')->delete();

    for ($i=0; $i < 10; $i++) {
      Users::create([
        'name'   => 'name '.$i,
        'password'    => Hash::make('admin'),
        'email'    => 'email'.$i,
        'sex'  => '0',
        'tel' => '323234234'.$i,
        'mobile' => '1300010010'.$i,
        'active' => '1',
        'description' => $i,

      ]);
    }
  }

}