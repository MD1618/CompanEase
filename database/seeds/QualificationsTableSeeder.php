<?php

use Illuminate\Database\Seeder;

class QualificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('qualifications')->insert([
            'title' => 'No Qualifications'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'HNC Software Development'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'HND Software Development'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'B.S Software Development'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'PH.D Software Development'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'M.S Software Development'
        ]);

        DB::table('qualifications')->insert([
            'title' => 'HNC Web Development'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'HND Web Development'
        ]);
        
        DB::table('qualifications')->insert([
            'title' => 'B.S Web Development'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'PH.D Web Development'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'M.S Web Development'
        ]);

        DB::table('qualifications')->insert([
            'title' => 'HNC Computer Science'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'HND Computer Science'
        ]);
       
        DB::table('qualifications')->insert([
            'title' => 'B.S Computer Science'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'PH.D Computer Science'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'M.S Computer Science'
        ]);
    }
}
