<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $item = app()->make('App\Models\User');
        $hasher = app()->make('hash');
        $password = $hasher->make('123456');
        $api_token = sha1(time());
        $item->fill([
          'username'=>'Whtulloh',
          'email'=>'wh.tulloh@gmail.com',
          'password'=>$password,
          'api_token'=>$api_token
        ]);
        $item->save();
    }
}
