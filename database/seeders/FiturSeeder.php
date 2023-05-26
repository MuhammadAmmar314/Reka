<?php

namespace Database\Seeders;

use App\Models\Fitur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createMultipleFiturs = [
            ['fitur'=>'Mesin Kasir','fitur_image'=>'fitur_1.jpg'],
            ['fitur'=>'Scan Barcode','fitur_image'=>'fitur_3.jpg'],
            ['fitur'=>'Daftar Kurir','fitur_image'=>'fitur_2.jpg'],
            ['fitur'=>'Stock Opname','fitur_image'=>'fitur_4.jpg'],
            ['fitur'=>'Print Thermal','fitur_image'=>'fitur_5.jpg']
        ];

        Fitur::insert($createMultipleFiturs);
    }
}
