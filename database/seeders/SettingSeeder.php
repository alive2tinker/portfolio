<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key' => 'twitter',
            'value' => 'https://twitter.com/alive2tinker',
            'group' => 'social',
            'meta' => [
                'icon' => 'twitter.svg'
            ],
            'user_id' => 1
        ]);

        Setting::create([
            'key' => 'github',
            'value' => 'https://github.com/alive2tinker',
            'group' => 'social',
            'meta' => [
                'icon' => 'github.svg'
            ],
            'user_id' => 1
        ]);

        Setting::create([
            'key' => 'linkedin',
            'value' => 'https://www.linkedin.com/in/abdulmalik-alsufayran',
            'group' => 'social',
            'meta' => [
                'icon' => 'linkedin.svg'
            ],
            'user_id' => 1
        ]);

        Setting::create([
            'key' => 'phone',
            'value' => '00966548226392',
            'group' => 'contact',
            'user_id' => 1
        ]);

        Setting::create([
            'key' => 'email',
            'value' => 'sufayran@gmail.com',
            'group' => 'contact',
            'user_id' => 1
        ]);
    }
}
