<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            'first_name' => 'Garry',
            'last_name' => 'Beatie',
            'company_id' => '1',
            'email' => 'garryb@gmail.com',
            'phone' => '07777123123'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Martin',
            'last_name' => 'Drahony',
            'company_id' => '1',
            'email' => 'md@gmail.com',
            'phone' => '07777987654'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Linda',
            'last_name' => 'Markette',
            'company_id' => '1',
            'email' => 'lindam@gmail.com',
            'phone' => '07777456369'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Andy',
            'last_name' => 'Devil',
            'company_id' => '1',
            'email' => 'andy@gmail.com',
            'phone' => '07777741852'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Dave',
            'last_name' => 'Sanders',
            'company_id' => '2',
            'email' => 'davey@gmail.com',
            'phone' => '07777741852'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Julie',
            'last_name' => 'Amil',
            'company_id' => '2',
            'email' => 'jamil@gmail.com',
            'phone' => '07777741852'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Mandy',
            'last_name' => 'Deely',
            'company_id' => '3',
            'email' => 'mdeely@gmail.com',
            'phone' => '07777741852'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Buck',
            'last_name' => 'Rodgers',
            'company_id' => '4',
            'email' => 'beedeebeedee@gmail.com',
            'phone' => '07777741852'
        ]);
    }
}
