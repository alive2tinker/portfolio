<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Abdulmalik Alsufayran',
            'email' => 'sufayran@gmail.com',
            'password' => bcrypt('Sufayr@n2022'),
            'meta' => [
                'main_description' => [
                    'en' => 'Software designer, founder, and amateur astronaut.',
                    'ar' => 'مهندس نظم ويب وموبايل متكامل. '
                ],
                'sub_description' => [
                    'en' => 'I’m Spencer, a software designer and entrepreneur based in New York City. I’m the founder and CEO of Planetaria, where we develop technologies that empower regular people to explore space on their own terms.',
                    'ar' => 'هلا. انا عبدالملك. مهندس نظم ويب وموبايل متكامل من الرياض٫ المملكة العربية السعودية. احمل خبرة تتجاوز ٤ سنوات في تطوير المواقع وتطبيقات الجوال. اسعد ايامي عندما يسعد العميل بالحلول المقدمة'
                ],
                'rights' => [
                    'en' => 'Spencer Sharp. All rights reserved.',
                    'ar' => 'عبدالملك السفيران. جميع الحقوق محفوظة'
                ],
                'projects_header' => [
                    'en' => "Some of the things I've worked on",
                    'ar' => "بعض المشاريع التي اشتغلت عليها مسبقا"
                ],
                'projects_subheader' => [
                    'en' => "",
                    'ar' => ""
                ]
            ]
        ]);

        $this->call(MenuLinkSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(SkillSeeder::class);
    }
}
