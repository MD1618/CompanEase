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
            'name' => 'Unemployed',
            'email' => '',
            'logo' => '',
            'website' => ''
        ]);
        DB::table('companies')->insert([
            'name' => 'Beyond',
            'email' => 'queries@beyond.com',
            'logo' => 'companyLogos/logo1.jpg',
            'website' => 'www.beyond.co.uk'
        ]);
        DB::table('companies')->insert([
            'name' => 'Boxintegrate',
            'email' => 'queries@Boxintegrate.com',
           'logo' => 'companyLogos/logo2.png',
            'website' => 'www.Boxintegrate.co.uk'
        ]);
        DB::table('companies')->insert([
            'name' => 'QuiffGlobe',
            'email' => 'queries@QuiffGlobe.com',
           'logo' => 'companyLogos/logo3.png',
            'website' => 'www.QuiffGlobe.co.uk'
        ]);
        DB::table('companies')->insert([
            'name' => 'Ministry Of Databass',
            'email' => 'queries@databass.com',
           'logo' => 'companyLogos/logo4.jpg',
            'website' => 'www.databass.co.uk'
        ]);
        DB::table('companies')->insert([
            'name' => 'Tech Solution',
            'email' => 'queries@techs.com',
            'logo' => 'companyLogos/logo5.jpg',
            'website' => 'www.techs.co.uk'
        ]);
        DB::table('companies')->insert([
            'name' => 'Forward Zen',
            'email' => 'queries@fzen.com',
           'logo' => 'companyLogos/logo6.jpg',
            'website' => 'www.fzen.co.uk'
        ]);
        DB::table('companies')->insert([
            'name' => 'Radial Web',
            'email' => 'queries@radialweb.com',
           'logo' => 'companyLogos/logo7.jpg',
            'website' => 'www.radialweb.co.uk'
        ]);
        DB::table('companies')->insert([
            'name' => 'Amazing Web',
            'email' => 'queries@amazingweb.com',
           'logo' => 'companyLogos/logo8.png',
            'website' => 'www.amazingweb.co.uk'
        ]);
        DB::table('companies')->insert([
            'name' => 'Rocket And Relish Web',
            'email' => 'queries@rrweb.com',
            'logo' => 'companyLogos/logo9.png',
            'website' => 'www.rrweb.co.uk'
        ]);
        DB::table('companies')->insert([
            'name' => 'Evolve Web',
            'email' => 'queries@evolveweb.com',
           'logo' => 'companyLogos/logo10.jpg',
            'website' => 'www.evolveweb.co.uk'
        ]);
        DB::table('companies')->insert([
            'name' => 'Polaris Consulting',
            'email' => 'queries@polaris.com',
           'logo' => 'companyLogos/logo11.jpg',
            'website' => 'www.polaris.co.uk'
        ]);
        DB::table('companies')->insert([
            'name' => 'Elephant Studio',
            'email' => 'queries@elephantweb.com',
           'logo' => 'companyLogos/logo12.jpg',
            'website' => 'www.elephantweb.co.uk'
        ]);
    }
}
