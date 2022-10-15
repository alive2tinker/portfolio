<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'title' => [
                'ar' => 'HTML',
                'en' => 'HTML'
            ],
            'percentage' => 100,
            'user_id' => 1
        ]);

        Skill::create([
            'title' => [
                'ar' => 'اوراق النمط المتعاقب',
                'en' => 'CSS'
            ],
            'percentage' => 100,
            'user_id' => 1
        ]);

        Skill::create([
            'title' => [
                'ar' => 'بي اتش بي لارافل',
                'en' => 'PHP Laravel'
            ],
            'percentage' => 100,
            'user_id' => 1
        ]);

        Skill::create([
            'title' => [
                'ar' => 'جافا سكربت',
                'en' => 'Javascript'
            ],
            'percentage' => 90,
            'user_id' => 1
        ]);

        Skill::create([
            'title' => [
                'ar' => 'ايونيك',
                'en' => 'Ionic'
            ],
            'percentage' => 90,
            'user_id' => 1
        ]);

        Skill::create([
            'title' => [
                'ar' => 'Vue.js',
                'en' => 'Vue.js'
            ],
            'percentage' => 100,
            'user_id' => 1
        ]);

        Skill::create([
            'title' => [
                'ar' => 'Tailwind CSS',
                'en' => 'Tailwind CSS'
            ],
            'percentage' => 100,
            'user_id' => 1
        ]);

        Skill::create([
            'title' => [
                'ar' => 'ادارة المشاريع (SCRUM)',
                'en' => 'SCRUM Project Management'
            ],
            'percentage' => 50,
            'user_id' => 1
        ]);
    }
}
