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
            'title' => 'HND Software Development'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'PH.D Software Development'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'B.S Software Development'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'HNC Software Development'
        ]);
        DB::table('qualifications')->insert([
            'title' => 'M.S Software Development'
        ]);
    }
}
