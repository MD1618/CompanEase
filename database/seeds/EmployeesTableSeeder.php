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
            'phone' => '07777323323',
            'image' => 'employeePhotos/p2.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Martin',
            'last_name' => 'Panther',
            'company_id' => '1',
            'email' => 'md@gmail.com',
            'phone' => '07777987654',
            'image' => 'employeePhotos/p4.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Linda',
            'last_name' => 'Markette',
            'company_id' => '2',
            'email' => 'lindam@gmail.com',
            'phone' => '07777456369',
            'image' => 'employeePhotos/p1.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Andy',
            'last_name' => 'Devil',
            'company_id' => '3',
            'email' => 'andy@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p5.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Dave',
            'last_name' => 'Sanders',
            'company_id' => '3',
            'email' => 'davey@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p7.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Julie',
            'last_name' => 'Amil',
            'company_id' => '4',
            'email' => 'jamil@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p6.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Mandy',
            'last_name' => 'Deely',
            'company_id' => '5',
            'email' => 'mdeely@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p3.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Buck',
            'last_name' => 'Rodgers',
            'company_id' => '5',
            'email' => 'beedeebeedee@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p8.jpg'
        ]);

        

        DB::table('employees')->insert([
            'first_name' => 'Joe',
            'last_name' => 'Balloney',
            'company_id' => '6',
            'email' => 'joe@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p9.jpg'
        ]);

        DB::table('employees')->insert([
            'first_name' => 'Bryan',
            'last_name' => 'Anderson',
            'company_id' => '6',
            'email' => 'bryan@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p10.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Julia',
            'last_name' => 'Smith',
            'company_id' => '7',
            'email' => 'julies@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p11.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Jack',
            'last_name' => 'Gouche',
            'company_id' => '7',
            'email' => 'jg@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p12.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Jacky',
            'last_name' => 'Brown',
            'company_id' => '8',
            'email' => 'jb@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p13.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Barry',
            'last_name' => 'Bonjovie',
            'company_id' => '8',
            'email' => 'bb@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p14.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Paula',
            'last_name' => 'James',
            'company_id' => '9',
            'email' => 'pj@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p15.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'James',
            'last_name' => 'Brown',
            'company_id' => '9',
            'email' => 'jbb@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p16.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Davinci',
            'last_name' => 'Lock',
            'company_id' => '10',
            'email' => 'dl@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p17.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Shauna',
            'last_name' => 'Keen',
            'company_id' => '10',
            'email' => 'ks@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p18.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Max',
            'last_name' => 'Ford',
            'company_id' => '11',
            'email' => 'bf@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p19.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Zsolt',
            'last_name' => 'Berminia',
            'company_id' => '12',
            'email' => 'zb@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p20.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Sammy',
            'last_name' => 'Carvetti',
            'company_id' => '12',
            'email' => 'lc@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p21.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Jesus',
            'last_name' => 'Smith',
            'company_id' => '12',
            'email' => 'jesus@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p22.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Donna',
            'last_name' => 'Parker',
            'company_id' => '13',
            'email' => 'donny@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p23.jpg'
        ]);

        DB::table('employees')->insert([
            'first_name' => 'Samy',
            'last_name' => 'Smith',
            'company_id' => '13',
            'email' => 'sams@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p24.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Olly',
            'last_name' => 'Jones',
            'company_id' => '13',
            'email' => 'olly@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p25.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Joey',
            'last_name' => 'Smith',
            'company_id' => '13',
            'email' => 'joey@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p26.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Reginald',
            'last_name' => 'Dally',
            'company_id' => '13',
            'email' => 'rdally@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p27.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Bruce',
            'last_name' => 'Smith',
            'company_id' => '13',
            'email' => 'bruces@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p28.jpg'
        ]);
        DB::table('employees')->insert([
            'first_name' => 'Linda',
            'last_name' => 'Parker',
            'company_id' => '13',
            'email' => 'lparker@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p29.jpg'
        ]);

        DB::table('employees')->insert([
            'first_name' => 'Buck',
            'last_name' => 'Smith',
            'company_id' => '5',
            'email' => 'bsmith@gmail.com',
            'phone' => '07777741852',
            'image' => 'employeePhotos/p30.jpg'
        ]);
    }
}
