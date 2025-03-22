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
            'logo' => 'vscode.svg',
            'description' => 'A powerful and lightweight source code editor for all major development platforms.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Laravel',
            'logo' => 'laravel.svg',
            'description' => 'A PHP framework for building modern web applications with elegance and simplicity.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Vue.js',
            'logo' => 'vue.svg',
            'description' => 'A progressive JavaScript framework for building user interfaces and single-page applications.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Docker',
            'logo' => 'docker.svg',
            'description' => 'A containerization platform that enables software to run consistently across different environments.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Kubernetes',
            'logo' => 'kubernetes.svg',
            'description' => 'An open-source system for automating the deployment, scaling, and management of containerized applications.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'AWS S3',
            'logo' => 'aws.svg',
            'description' => 'A scalable object storage service provided by Amazon Web Services.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Python',
            'logo' => 'python.svg',
            'description' => 'A versatile programming language for various applications, including data analysis and AI development.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'NumPy',
            'logo' => 'numpy.svg',
            'description' => 'A library for the Python programming language, adding support for large, multi-dimensional arrays and matrices.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'pandas',
            'logo' => 'pandas.svg',
            'description' => 'A fast, powerful, flexible, and easy-to-use open-source data analysis and data manipulation library for Python.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'PyCharm',
            'logo' => 'pycharm.svg',
            'description' => 'A Python IDE for professional developers, offering powerful tools for productive development.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Whisper AI',
            'logo' => 'openai.svg',
            'description' => 'An AI-powered speech recognition system developed by OpenAI.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'CoquiTTS',
            'logo' => 'openai.svg',
            'description' => 'An open-source text-to-speech engine that brings the power of voice generation to your apps.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Ollama',
            'logo' => 'ollama.svg',
            'description' => 'A modern AI platform for running large language models locally.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Elk Stack',
            'logo' => 'elk.svg',
            'description' => 'A powerful combination of Elasticsearch, Logstash, and Kibana for data analysis and visualization.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Discord',
            'logo' => 'discord.svg',
            'description' => 'A VoIP, instant messaging, and digital distribution platform designed for creating communities.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Slack',
            'logo' => 'slack.svg',
            'description' => 'A collaboration hub that connects work with the people you work with.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Figma',
            'logo' => 'figma.svg',
            'description' => 'A collaborative interface design tool used to design apps and websites.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Warp Terminal',
            'logo' => 'warp-terminal.png',
            'description' => 'A fast, modern terminal built for the 21st century developer.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Brave Browser',
            'logo' => 'brave.svg',
            'description' => 'A privacy-focused browser that blocks ads and trackers by default.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Arduino IDE',
            'logo' => 'arduino.svg',
            'description' => 'The open-source Arduino Software (IDE) makes it easy to write code and upload it to the Arduino board.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Spark Mail',
            'logo' => 'spark.svg',
            'description' => 'A collaborative email app that makes organizing and communicating via email a breeze.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Termius',
            'logo' => 'termius.svg',
            'description' => 'An SSH client that works on desktop and mobile, offering a complete command-line experience.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'software',
            'name' => 'Postman',
            'logo' => 'postman.svg',
            'description' => 'An API platform for building and using APIs, simplifying each step of the API lifecycle.',
            'user_id' => 1
        ]);

        // Hardware Tools
        Tool::create([
            'type' => 'hardware',
            'name' => 'MacBook MBP 14"',
            'logo' => 'apple.svg',
            'description' => 'Apple MacBook Pro 14-inch, known for its powerful M-series processors and portability.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'hardware',
            'name' => 'Nvidia GTX 4070',
            'logo' => 'nvidia.svg',
            'description' => 'A high-performance graphics card designed for gaming, AI, and machine learning workloads.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'hardware',
            'name' => 'iOS 16',
            'logo' => 'apple.svg',
            'description' => 'The latest operating system for iPhone devices, featuring new enhancements in security and performance.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'hardware',
            'name' => 'Android 14',
            'logo' => 'android.svg',
            'description' => 'The newest version of Android, bringing innovative features and improved privacy options.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'hardware',
            'name' => 'Ikea Desk & Chair',
            'logo' => 'ikea.svg',
            'description' => 'Ergonomically designed desk and chair from Ikea, providing a comfortable setup for long coding hours.',
            'user_id' => 1
        ]);

        Tool::create([
            'type' => 'hardware',
            'name' => 'Nuphy Keyboard',
            'logo' => 'nuphy.png',
            'description' => 'A mechanical keyboard designed for productivity and style, blending comfort and tactile feedback.',
            'user_id' => 1
        ]);
    }
}
