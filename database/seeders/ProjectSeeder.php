<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title' => [
                'ar' => "الملف الشخصي",
                'en' => "Personal Portfolio"
            ],
            'excerpt' => [
                'ar' => "الموقع الذي تراه امامك بنيته بنفسي",
                'en' => "the website you are viewing now is made by me"
            ],
            'user_id' => 1
        ]);
    }
}
