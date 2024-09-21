<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CreateImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * KEY : MULTIPERMISSION
     */
    public function run(): void
    {
        // $nationalities = [
        //     'Cypriot',
        //     'Czech',
        //     'Danish',
        //     'Djibouti',
        //     'Dominican',
        //     'Dutch',
        //     'East Timorese',
        //     'Ecuadorean',
        //     'Egyptian',
        //     'Emirian'
        // ];

        // foreach ($nationalities as $nationality) {
        //     DB::table('mast_nationalities')->insert(['name' => $nationality, 'user_id' => 1]);
        // }
    }
}
