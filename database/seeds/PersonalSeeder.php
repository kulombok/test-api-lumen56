<?php

use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personals')->delete();
        $item = app()->make('App\Models\personal');
        $item->fill([
          	'name' => 'Wahyu Hidayatulloh',
        	'birthdateplace' => 'Kebumen 09-08-1992',
        	'gender' => 'Laki-laki',
        	'address' => 'Kebumen nan jauh di mato',
        	'phonenumber' => '085643762891',
        	'maritalstatus' => 'Menikah',
        	'suku' => 'Jawa',
        	'pekerjaan' => 'Programmer',
        	'photo' => '-',
        	'email' => 'wh.tulloh@gmail.com',
        	'idparrentrelation' => '-'
        ]);
        $item->save();
    }
}
