<?php

use Illuminate\Database\Seeder;

class Qualifications_pivot_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employee_qualification')->insert([
            'qualification_id' => '1',
            'employee_id' => '1',
            'aquired' => '2019-06-06',
            'grade' => 'A'
        ]);
    }
}
