<?php

namespace Database\Seeders;

use App\Models\MenuLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuLink::create([
            'name' => [
                'en' => 'About',
                'ar' => 'تبذة'
            ],
            'link' => '/about',
            'location' => 'both',
            'user_id' => 1
        ]);

        MenuLink::create([
            'name' => [
                'en' => 'Articles',
                'ar' => 'مقالات'
            ],
            'link' => '/about',
            'location' => 'both',
            'user_id' => 1
        ]);

        MenuLink::create([
            'name' => [
                'en' => 'projects',
                'ar' => 'المشاريع',
            ],
            'link' => '/projects',
            'location' => 'both',
            'user_id' => 1
        ]);

        MenuLink::create([
            'name' => [
                'en' => 'More',
                'ar' => 'المزيد'
            ],
            'link' => '#contact-form',
            'user_id' => 1
        ]);

        MenuLink::create([
            'name' => [
                'en' => 'Contact',
                'ar' => 'اتصل بنا'
            ],
            'link' => '/contact',
            'menu_link_id' => 4,
            'user_id' => 1
        ]);
    }
}
