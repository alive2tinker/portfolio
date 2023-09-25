<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title' => [
                'ar' => "استشارة تقنية",
                'en' => "IT Consultation"
            ],
            'excerpt' => [
                'ar' => " is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make",
                'en' => " is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make"
            ],
            'price' => 100,
            'price_meta' => "per hour",
            'is_featured' => 1,
'user_id' => 1
        ]);
        Service::create([
            'title' => [
                'ar' => "استشارة تقنية",
                'en' => "IT Consultation"
            ],
            'excerpt' => [
                'ar' => " is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make",
                'en' => " is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make"
            ],
            'price' => 100,
            'price_meta' => "per hour",
            'is_featured' => 1,
'user_id' => 1
        ]);
        Service::create([
            'title' => [
                'ar' => "استشارة تقنية",
                'en' => "IT Consultation"
            ],
            'excerpt' => [
                'ar' => " is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make",
                'en' => " is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make"
            ],
            'price' => 100,
            'price_meta' => "per hour",
            'is_featured' => 1,
'user_id' => 1
        ]);
        Service::create([
            'title' => [
                'ar' => "استشارة تقنية",
                'en' => "IT Consultation"
            ],
            'excerpt' => [
                'ar' => " is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make",
                'en' => " is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make"
            ],
            'price' => 100,
            'price_meta' => "per hour",
            'is_featured' => 0,
            'user_id' => 1
        ]);
    }
}
