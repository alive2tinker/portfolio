<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tool;

class ToolSeeder extends Seeder
{
    public function run()
    {
        // Software Tools
        Tool::create([
            'type' => 'software',
            'name' => 'VSCode',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg',
            'description' => 'A powerful and lightweight source code editor for all major development platforms.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Laravel',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg',
            'description' => 'A PHP framework for building modern web applications with elegance and simplicity.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Vue.js',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg',
            'description' => 'A progressive JavaScript framework for building user interfaces and single-page applications.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Docker',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg',
            'description' => 'A containerization platform that enables software to run consistently across different environments.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Kubernetes',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kubernetes/kubernetes-plain.svg',
            'description' => 'An open-source system for automating the deployment, scaling, and management of containerized applications.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'AWS S3',
            'logo' => 'https://cdn.worldvectorlogo.com/logos/aws-s3.svg',
            'description' => 'A scalable object storage service provided by Amazon Web Services.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Python',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg',
            'description' => 'A versatile programming language for various applications, including data analysis and AI development.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'NumPy',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/numpy/numpy-original.svg',
            'description' => 'A library for the Python programming language, adding support for large, multi-dimensional arrays and matrices.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'pandas',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/pandas/pandas-original.svg',
            'description' => 'A fast, powerful, flexible, and easy-to-use open-source data analysis and data manipulation library for Python.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'PyCharm',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/1/1d/PyCharm_Icon.svg',
            'description' => 'A Python IDE for professional developers, offering powerful tools for productive development.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Whisper AI',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Whisper_logo.png/640px-Whisper_logo.png',
            'description' => 'An AI-powered speech recognition system developed by OpenAI.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'CoquiTTS',
            'logo' => 'https://avatars.githubusercontent.com/u/76402958?s=200&v=4',
            'description' => 'An open-source text-to-speech engine that brings the power of voice generation to your apps.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Ollama',
            'logo' => 'https://ollama.com/favicon.ico',
            'description' => 'A modern AI platform for running large language models locally.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Elk Stack',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/e/e9/Elasticsearch_logo.svg',
            'description' => 'A powerful combination of Elasticsearch, Logstash, and Kibana for data analysis and visualization.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Discord',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/discord/discord-original.svg',
            'description' => 'A VoIP, instant messaging, and digital distribution platform designed for creating communities.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Slack',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/slack/slack-original.svg',
            'description' => 'A collaboration hub that connects work with the people you work with.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Figma',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg',
            'description' => 'A collaborative interface design tool used to design apps and websites.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Warp Terminal',
            'logo' => 'https://avatars.githubusercontent.com/u/79669441?s=200&v=4',
            'description' => 'A fast, modern terminal built for the 21st century developer.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Brave Browser',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Brave_logo.svg/1200px-Brave_logo.svg.png',
            'description' => 'A privacy-focused browser that blocks ads and trackers by default.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Arduino IDE',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/arduino/arduino-original.svg',
            'description' => 'The open-source Arduino Software (IDE) makes it easy to write code and upload it to the Arduino board.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Spark Mail',
            'logo' => 'https://sparkmailapp.com/images/favicon.png',
            'description' => 'A collaborative email app that makes organizing and communicating via email a breeze.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Termius',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Termius_Logo.png/600px-Termius_Logo.png',
            'description' => 'An SSH client that works on desktop and mobile, offering a complete command-line experience.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Postman',
            'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postman/postman-original.svg',
            'description' => 'An API platform for building and using APIs, simplifying each step of the API lifecycle.',
            'user_id' => 1
        ]);

        // Hardware Tools
        Tool::create([
            'type' => 'hardware',
            'name' => 'MacBook MBP 14"',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg',
            'description' => 'Apple MacBook Pro 14-inch, known for its powerful M-series processors and portability.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'hardware',
            'name' => 'Nvidia GTX 4070',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/2/23/Nvidia_logo.svg',
            'description' => 'A high-performance graphics card designed for gaming, AI, and machine learning workloads.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'hardware',
            'name' => 'iOS 16',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3a/IOS_16_Logo.png',
            'description' => 'The latest operating system for iPhone devices, featuring new enhancements in security and performance.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'hardware',
            'name' => 'Android 14',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/d/d7/Android_robot.svg',
            'description' => 'The newest version of Android, bringing innovative features and improved privacy options.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'hardware',
            'name' => 'Ikea Desk & Chair',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/5/50/Ikea_logo.svg',
            'description' => 'Ergonomically designed desk and chair from Ikea, providing a comfortable setup for long coding hours.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'hardware',
            'name' => 'Nuphy Keyboard',
            'logo' => 'https://cdn.shopify.com/s/files/1/0342/3687/5475/files/NuphyLogo1_100x100.png?v=1614225643',
            'description' => 'A mechanical keyboard designed for productivity and style, blending comfort and tactile feedback.',
            'user_id' => 1
        ]);
    }
}
