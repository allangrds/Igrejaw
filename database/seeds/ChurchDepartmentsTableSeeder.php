<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChurchDepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Comunicação'
        ]);
    }
}
