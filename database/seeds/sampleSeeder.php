<?php

use Illuminate\Database\Seeder;
use App\Client;
use App\Project;
use App\User;



class sampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$angie = User::create([
    		'fname' => 'Angie',
    		'lname' => 'Ramirez',
            'email' => 'user@gmail.com',
    		'personalLogo' => 'logo.jpg',
    		'profession' => 'Web Developer',
    		'pnumber' => '4168187041',
            'password' => '123456',
    		'address' => '1235 Richmond Street'
    	]);

    	$teacha = Client::create([
    		'company_name' => 'teacha',
    		'client_fname' => 'Karly',
    		'client_lname' => 'Johnson',
    		'business_type' => 'Tea Shop',
    		'address'=> '70 Blackfriars Street, N6H 1K4',
    		'number' => '419754132',
    		'email' => 'teacha@gmail.com',
    		'user_id' => $angie->id
    	]);

            $burritoboyz = Client::create([
            'company_name' => 'Burrito Boyz',
            'client_fname' => 'Kyle',
            'client_lname' => 'Williams',
            'business_type' => 'Food Service',
            'address'=> '206 Central Ave. London, ON',
            'number' => '5196792699',
            'email' => 'burritoboyz@gmail.com',
            'user_id' => $angie->id
        ]);
        
          $cherryhillmall = Client::create([
            'company_name' => 'Cherryhill Village Mall',
            'client_fname' => 'Alicia',
            'client_lname' => 'Racine',
            'business_type' => 'Commerce',
            'address'=> '301 Oxford St W, London, ON N6H 1S6',
            'number' => '519 679-1378',
            'email' => 'chvm@gmail.com',
            'user_id' => $angie->id
        ]);

             $lcc = Client::create([
            'company_name' => 'London Convention Center',
            'client_fname' => 'David',
            'client_lname' => 'Richards',
            'business_type' => 'Events Service',
            'address'=> '300 York St, London, ON N6B 1P8',
            'number' => '5196616200',
            'email' => 'londoncc.com',
            'user_id' => $angie->id
        ]);

             $adrenaline = Client::create([
            'company_name' => 'Adrenaline MMA Gym',
            'client_fname' => 'Sam',
            'client_lname' => 'Stout',
            'business_type' => 'Gym',
            'address'=> '716 York St. London ON  N5W 2S8',
            'number' => '5194518880',
            'email' => 'hello@adrenaline.com',
            'user_id' => $angie->id
        ]);

            $cwcoffeeco = Client::create([
            'company_name' =>'CommonWealth Coffee CO',
            'client_fname' => 'Karen',
            'client_lname' => 'Woods',
            'business_type' => 'Coffee Shop',
            'address'=> '478 Richmond St, London, ON N6A 3E6',
            'number' => '5194321113',
            'email' => 'hello@CommonWealthCoffeco.ca',
            'user_id' => $angie->id
            ]);

             $growbloomCo = Client::create([
            'company_name' =>'Grow & Bloom Collective',
            'client_fname' => 'Allison',
            'client_lname' => 'Jameson',
            'business_type' => 'Plant Shop',
            'address'=> '569 Richmond St. London, Ontario N6A 3G2',
            'number' => '5194394769',
            'email' => 'growbloomCo@gmail.com',
            'user_id' => $angie->id
            ]);

        


    	Project::create([
    		'project_name' => 'Teacha website',
    		'project_descrip' => 'Create an informative single page website for local tea shop. Their products are all "home-made" and of the best quality. Will also need to take some pictures of the products for the webpage and other uses in the future.',
    		'estimated_due_date' => '2019-03-28',
    		'completion_status' => 'current project',
    		'payment_status' => 'unpaid',
    		'start_date' => '2019-02-28',
    		'end_date' => '2019-04-03',
    		'discount' => '0.1',
    		'total' => '900.00',
            'id_quote' => '',
            'id_contract' => '',
    		'id_invoice' => '',
    		'client_id' => $teacha->id
        ]);

            Project::create([
            'project_name' => 'Burrito Boyz website',
            'project_descrip' => 'Re design Burrito Boyz original website into a more simple single page website. Cutting down on such large font sizes and pictures and only leaving in necessary information.',
            'estimated_due_date' => '2019-02-20',
            'completion_status' => 'past project',
            'payment_status' => 'paid',
            'start_date' => '2019-02-28',
            'end_date' => '2019-02-25',
            'discount' => '0.0',
            'total' => '1000.00',
            'id_quote' => '',
            'id_contract' => '',
            'id_invoice' => '',
            'client_id' => $burritoboyz->id
    	]);

          Project::create([
            'project_name' => 'Cherryhill Village Mall Website',
            'project_descrip' => 'Re design Cherryhill Mall website to something more modern and up to date with latest trends, this includes using more photography and animation. The page should also be responsive. ',
            'estimated_due_date' => '2018-06-15',
            'completion_status' => 'past project',
            'payment_status' => 'paid',
            'start_date' => '2018-05-15',
            'end_date' => '2018-06-17',
            'discount' => '0.0',
            'total' => '1400.00',
            'id_quote' => '',
            'id_contract' => '',
            'id_invoice' => '',
            'client_id' => $cherryhillmall->id
        ]);
        
            Project::create([
            'project_name' => 'London Convention Center Website',
            'project_descrip' => "Design London Convention Center's website. All inforamation and copy's that will go on the page will be provided before-hand. Important to have a section with upcoming event dates as well a section where tickets can be purchased.",
            'estimated_due_date' => '2017-05-01',
            'completion_status' => 'past project',
            'payment_status' => 'paid',
            'start_date' => '2017-03-06',
            'end_date' => '2017-05-15',
            'discount' => '0.0',
            'total' => '1800.00',
            'id_quote' => '',
            'id_contract' => '',
            'id_invoice' => '',
            'client_id' => $lcc->id
        ]);

            Project::create([
            'project_name' => 'Adrenaline Gym Schedule',
            'project_descrip' => "Add a updatable class schedule card to the website. Also a section where upcoming events will posted.",
            'estimated_due_date' => '2019-09-08',
            'completion_status' => 'current project',
            'payment_status' => 'unpaid',
            'start_date' => '2019-08-06',
            'end_date' => '2019-09-01',
            'discount' => '0.0',
            'total' => '400.00',
            'id_quote' => '',
            'id_contract' => '',
            'id_invoice' => '',
            'client_id' => $adrenaline->id
        ]);

            Project::create([
            'project_name' => 'Adrenaline Gym Events',
            'project_descrip' => "Add a updatable section where upcoming events will posted.",
            'estimated_due_date' => '2019-07-02',
            'completion_status' => 'current project',
            'payment_status' => 'unpaid',
            'start_date' => '2019-06-01',
            'end_date' => '2019-07-02',
            'discount' => '0.2',
            'total' => '380.00',
            'id_quote' => '',
            'id_contract' => '',
            'id_invoice' => '',
            'client_id' => $adrenaline->id
        ]);

        
             Project::create([
            'project_name' => 'CommonWealth Coffe Co Website',
            'project_descrip' => "Design and code a singe page website for local coffeshop in London. This site should include menu, about, contact and link to social media. Photos and copys will be provided. ",
            'estimated_due_date' => '2019-08-08',
            'completion_status' => 'current project',
            'payment_status' => 'unpaid',
            'start_date' => '2019-07-02',
            'end_date' => '2019-08-08',
            'discount' => '0.0',
            'total' => '700.00',
            'id_quote' => '',
            'id_contract' => '',
            'id_invoice' => '',
            'client_id' => $cwcoffeeco->id
        ]);

            Project::create([
            'project_name' => 'BoxCar Donuts Section',
            'project_descrip' => " Create a section for BoxCar Donuts in the CommonWealth Coffe Co website.",
            'estimated_due_date' => '2019-08-15',
            'completion_status' => 'current project',
            'payment_status' => 'unpaid',
            'start_date' => '2019-08-02',
            'end_date' => '2019-08-15',
            'discount' => '0.2',
            'total' => '300.00',
            'id_quote' => '',
            'id_contract' => '',
            'id_invoice' => '',
            'client_id' => $cwcoffeeco->id
        ]);

            Project::create([
            'project_name' => 'Grow & Bloom Co Website',
            'project_descrip' => " Redesign Grow & Bloom Co website. More organized and clean look. Adding in pictures of the shop",
            'estimated_due_date' => '2019-06-10',
            'completion_status' => 'past project',
            'payment_status' => 'paid',
            'start_date' => '2019-05-01',
            'end_date' => '2019-06-10',
            'discount' => '0.0',
            'total' => '500.00',
            'id_quote' => '',
            'id_contract' => '',
            'id_invoice' => '',
            'client_id' => $growbloomCo->id
        ]);


    }
}