<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting=Setting::create([
            'email'=>'elnur.guliev01@gmail.com',
            'phone_1'=>'(+994) 12 493 4538',
            'phone_2'=>'(+994) 70 493 4538',
            'adress'=>'{"az":"Baku, Azerbaijan, Azadlig Ave. 34","en":"Baku, Azerbaijan, Azadlig Ave. 34en","de":"Baku, Azerbaijan, Azadlig Ave. 34 de"}',
            'ins'=>'www',
            'fb'=>'www',
            'tw'=>'www',
        ]);
    }
}
