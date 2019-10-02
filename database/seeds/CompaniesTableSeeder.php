<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('companies')->insert([
            'name' => 'First Company',
            'email' => 'queries@firstcompany.com',
            'logo' => '',
            'website' => 'https://www.firstcompany.co.uk/'
        ]);
        DB::table('companies')->insert([
            'name' => 'Second Company',
            'email' => 'queries@secondcompany.com',
            'logo' => '',
            'website' => 'https://www.secondcompany.co.uk/'
        ]);
        DB::table('companies')->insert([
            'name' => 'Third Company',
            'email' => 'queries@thirdcompany.com',
            'logo' => '',
            'website' => 'https://www.thirdcompany.co.uk/'
        ]);
        DB::table('companies')->insert([
            'name' => 'Fourth Company',
            'email' => 'queries@fourthcompany.com',
            'logo' => '',
            'website' => 'https://www.fourthcompany.co.uk/'
        ]);
    }
}
