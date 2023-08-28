<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::factory()->create([
            'rating' => 4,
            'body' => '"You made it so simple."',
            'customer_id' => Customer::factory()->create([
                'firstname' => 'Brittan',
                'lastname' => 'Wheeler',
                'role' => 'Consultant',
                'picture' => 'Brittan_Wheeler.png',
            ])
        ]);

        Review::factory()->create([
            'rating' => 3,
            'body' => '“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.”',
            'customer_id' => Customer::factory()->create([
                'firstname' => 'Alexa',
                'lastname' => 'Popen',
                'role' => 'CEO',
                'picture' => 'Alexa_Popen.png',
            ])
        ]);

        $lesLieFactory = Customer::factory()->create([
            'firstname' => 'Leslie',
            'lastname' => 'Alexander',
            'role' => 'Founder',
            'picture' => 'Leslie_Alexander.png',
        ]);

        Review::factory(4)->create([
            'rating' => 5,
            'body' => '“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.”',
            'customer_id' => $lesLieFactory
        ]);
        
    }
}
