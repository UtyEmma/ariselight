<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Ebuka Samuel',
                'message' => 'I had an amazing experience buying my house with Arise Light',
                'location' => 'Enugu',
            ],
            [
                'name' => 'Nelson Johnson',
                'message' => 'I had an amazing experience buying my house with Arise Light',
                'location' => 'Port harcourt',
            ],
        ];

        foreach ($testimonials as $key => $value) {
            Testimonial::create($value);
        }
    }
}
