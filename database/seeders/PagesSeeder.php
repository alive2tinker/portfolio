<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Wink\WinkPage;
use Illuminate\Support\Str;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WinkPage::create([
            'id' => Str::uuid(),
            'slug' => "about_page_en",
            'title' => "About Me",
            'body' => "<p>Hello, my name is Abdulmalik Salman Fahad Alsufayran, and I am a full-stack software engineer working at Saudi Mobile Telecommunication Company (Zain). I possess deep expertise spanning over eight years in PHP, JavaScript, and MySQL technologies. I have a significant passion for creating and developing Software as a Service (SaaS) businesses, aiming to generate profit and offer real value to humanity.</p><p>Throughout my professional journey, I have focused on enhancing my programming and technical skills, working on diverse projects that have bolstered my experience and expanded my understanding of the challenges digital businesses face in our current era. My passion for innovation and desire to make a positive contribution to the world always drive me to explore new technologies and apply best practices in my field.</p><p>I believe that success comes through collaboration and knowledge sharing, so I always strive to share my experiences with colleagues in the field and continuously learn through interaction with technical and professional communities. My goal is to create innovative software solutions that meet the evolving needs of users and businesses, and I aspire to leave a positive mark on every project I work on.</p><p>I am always looking for opportunities that allow me to apply my passion and expertise in creating technological products that have a tangible impact and contribute to sustainable progress. Let’s be partners in success and work together to build a better future through technology.</p>",
            'meta' => '{"meta_description":null,"opengraph_title":null,"opengraph_description":null,"opengraph_image":null,"opengraph_image_width":null,"opengraph_image_height":null,"twitter_title":null,"twitter_description":null,"twitter_image":null}'
        ]);

        WinkPage::create([
            'id' => Str::uuid(),
            'slug' => "about_page_ar",
            'title' => "نبذة",
            'body' => "<p>مرحباً، اسمي عبدالملك سلمان فهد السفيران، وأنا مهندس برمجيات متكامل الخبرات يعمل في شركة الاتصالات المتنقلة السعودية (زين). أمتلك خبرة عميقة تمتد لأكثر من ثمانية أعوام في تقنيات PHP وJavaScript وMySQL، وأتمتع بشغف كبير نحو إنشاء وتطوير الأعمال التجارية المستندة إلى البرمجيات كخدمة (SaaS)، بهدف تحقيق الربح وتقديم قيمة مضافة حقيقية للإنسانية.</p><p>من خلال مسيرتي المهنية، ركزت على تطوير مهاراتي البرمجية والتقنية، وعملت على مشاريع متنوعة ساهمت في تعزيز خبرتي وتوسيع نطاق فهمي للتحديات التي تواجه الأعمال التجارية الرقمية في عصرنا الحالي. إن شغفي بالابتكار ورغبتي في المساهمة بإيجابية في العالم يدفعاني دائماً لاستكشاف تقنيات جديدة وتطبيق أفضل الممارسات في مجالي.</p><p>أؤمن بأن النجاح يأتي من خلال التعاون وتبادل المعرفة، لذلك أحرص دائماً على مشاركة خبراتي مع زملائي في المجال والتعلم المستمر من خلال التفاعل مع المجتمعات التقنية والمهنية. أهدف إلى إنشاء حلول برمجية مبتكرة تلبي الاحتياجات المتغيرة للمستخدمين والشركات، وأطمح لترك بصمة إيجابية في كل مشروع أعمل عليه.</p><p>أنا دائماً في طلب الفرص التي تتيح لي تطبيق شغفي وخبرتي في إنشاء منتجات تقنية ذات تأثير ملموس وتساهم في تحقيق تقدم مستدام. لنكن شركاء في النجاح ونعمل معاً لبناء مستقبل أفضل من خلال التكنولوجيا.</p>",
            'meta' => '{"meta_description":null,"opengraph_title":null,"opengraph_description":null,"opengraph_image":null,"opengraph_image_width":null,"opengraph_image_height":null,"twitter_title":null,"twitter_description":null,"twitter_image":null}'
        ]);
    }
}
