<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();


         Listing::factory(6)->create();
        //  Listing::create(    [
        //     'title' => 'Lavavel Senior Developer',
        //     'tags' => 'Laravel, JavaScript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Gweru, Mkoba',
        //     'email' => 'email1@gmail.com',
        //     'website' => 'https//www.acme.com',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, atque explicabo. Sapiente hic ullam debitis illum temporibus explicabo, deleniti iure doloribus dicta asperiores eos, soluta eveniet officiis iste a nemo.'
        // ]);
        // Listing::create(   [
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'Laravel, Backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'Harare, Budiriro',
        //     'email' => 'email2@gmail.com',
        //     'website' => 'https//www.starkindustries.com',
        //     'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis, atque explicabo. Sapiente hic ullam debitis illum temporibus explicabo, deleniti iure doloribus dicta asperiores eos, soluta eveniet officiis iste a nemo.'
        // ]);


    }
}
