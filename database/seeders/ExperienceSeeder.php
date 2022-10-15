<?php

namespace Database\Seeders;

use App\Models\Experience;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create([
            'organization_name' => [
                'en' => 'Saudi Mobile Telecommunications Company (Zain)',
                'ar' => 'شركة الاتصالات المتنقلة السعودية (زين)'
            ],
            'organization_link' => 'https://sa.zain.com',
            'position' => [
                'ar' => "مهندس تطوير الويب المتكامل",
                'en' => 'Fullstack software specialist'
            ],
            'duties' => [
                'en' => 'I have create the Zain eSIM portal where customer can purchase new eSIM or convert their existing one',
                'ar' => 'صنعت بوابة الشرائح الالكترونية ليتمكن عملاء زين من شراء شرائح جديدة مدمجة او استبدال الشريحة الحالية'
            ],
            'user_id' => 1,
            'start_date' => Carbon::parse('2021-07-01')
        ]);
    }
}
