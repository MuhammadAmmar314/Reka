<?php

namespace Database\Seeders;

use App\Models\Karir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KarirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createMultipleKarirs = [
            ['job_title'=>'Marketing Communication', 'description'=>'Ayo Nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu dan mulai mengembangkan bisnis toko online bersama' , 'requirements'=>'Requirements 1. Requirements 2. Requirements 3. Requirements 4' , 'responsibilities'=>'Responsibilities 1. Responsibilities 2. Responsibilities 3. Responsibilities 4. Responsibilities 5.' , 'job_image'=>'job_1.jpg'],
            ['job_title'=>'Marketing Communication', 'description'=>'Ayo Nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu dan mulai mengembangkan bisnis toko online bersama' , 'requirements'=>'Requirements 1. Requirements 2. Requirements 3. Requirements 4' , 'responsibilities'=>'Responsibilities 1. Responsibilities 2. Responsibilities 3. Responsibilities 4. Responsibilities 5.' , 'job_image'=>'job_2.jpg'],
            ['job_title'=>'Marketing Communication', 'description'=>'Ayo Nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu dan mulai mengembangkan bisnis toko online bersama' , 'requirements'=>'Requirements 1. Requirements 2. Requirements 3. Requirements 4' , 'responsibilities'=>'Responsibilities 1. Responsibilities 2. Responsibilities 3. Responsibilities 4. Responsibilities 5.' , 'job_image'=>'job_3.jpg'],
            ['job_title'=>'Marketing Communication', 'description'=>'Ayo Nikmati beragam fitur yang dapat memberikan kemudahan untuk tokomu dan mulai mengembangkan bisnis toko online bersama' , 'requirements'=>'Requirements 1. Requirements 2. Requirements 3. Requirements 4' , 'responsibilities'=>'Responsibilities 1. Responsibilities 2. Responsibilities 3. Responsibilities 4. Responsibilities 5.' , 'job_image'=>'job_4.jpg']
        ];

        Karir::insert($createMultipleKarirs);
    }
}
