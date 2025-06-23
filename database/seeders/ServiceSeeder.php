<?php
       namespace Database\Seeders;

       use App\Models\Service;
       use Illuminate\Database\Seeder;

       class ServiceSeeder extends Seeder
       {
           public function run(): void
           {
               Service::create([
                   'title' => 'Pengembangan Aplikasi',
                   'description' => 'Kami membuat aplikasi mobile dan web sesuai kebutuhan Anda.',
               ]);
               Service::create([
                   'title' => 'Solusi IoT',
                   'description' => 'Integrasi IoT untuk bisnis cerdas.',
               ]);
               Service::create([
                   'title' => 'Konsultasi IT',
                   'description' => 'Konsultasi untuk transformasi digital.',
               ]);
               Service::create([
                   'title' => 'Desain UI/UX',
                   'description' => 'Desain antarmuka pengguna yang intuitif.',
               ]);
               Service::create([
                   'title' => 'Cloud Computing',
                   'description' => 'Solusi cloud untuk efisiensi bisnis.',
               ]);
           }
       }
       ?>