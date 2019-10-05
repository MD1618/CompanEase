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
            'qualification_id' => '2',
            'employee_id' => '1',
            'aquired' => '2019-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '3',
            'employee_id' => '1',
            'aquired' => '2019-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '6',
            'employee_id' => '1',
            'aquired' => '2019-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '4',
            'employee_id' => '2',
            'aquired' => '2018-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '5',
            'employee_id' => '2',
            'aquired' => '2017-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '8',
            'employee_id' => '3',
            'aquired' => '2017-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '7',
            'employee_id' => '3',
            'aquired' => '2016-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '7',
            'employee_id' => '4',
            'aquired' => '2014-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '8',
            'employee_id' => '4',
            'aquired' => '2013-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '9',
            'employee_id' => '5',
            'aquired' => '2012-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '8',
            'employee_id' => '5',
            'aquired' => '2019-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '10',
            'employee_id' => '6',
            'aquired' => '2012-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '14',
            'employee_id' => '6',
            'aquired' => '2011-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '13',
            'employee_id' => '7',
            'aquired' => '2011-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '12',
            'employee_id' => '7',
            'aquired' => '2016-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '13',
            'employee_id' => '8',
            'aquired' => '2011-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '3',
            'employee_id' => '8',
            'aquired' => '2012-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '6',
            'employee_id' => '4',
            'aquired' => '2011-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '2',
            'employee_id' => '4',
            'aquired' => '2011-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '3',
            'employee_id' => '4',
            'aquired' => '2019-06-06',
            'grade' => 'A'
        ]);
        DB::table('employee_qualification')->insert([
            'qualification_id' => '6',
            'employee_id' => '3',
            'aquired' => '2019-06-06',
            'grade' => 'A'
        ]);
    }
}
