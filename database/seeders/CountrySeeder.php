<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counter=Country::create([
            
            'student'=>'12345',
            'faculty'=>'135',
            'country'=>'24',
            'alumni_employet'=>'82%',
        ]);
    }
}
