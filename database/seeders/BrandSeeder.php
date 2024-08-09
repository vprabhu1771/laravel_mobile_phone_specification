<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Samsung',
                'description' => 'Samsung Electronics is a South Korean multinational electronics company known for its mobile phones, TVs, and other consumer electronics.'
            ],
            [
                'name' => 'Apple',
                'description' => 'Apple Inc. is an American multinational technology company known for its iPhones, iPads, and Mac computers.'
            ],
            [
                'name' => 'Xiaomi',
                'description' => 'Xiaomi Corporation is a Chinese electronics company known for its smartphones, smart home devices, and various other tech products.'
            ],
            [
                'name' => 'OnePlus',
                'description' => 'OnePlus is a Chinese smartphone manufacturer known for producing high-quality smartphones with flagship-level specifications.'
            ],
            [
                'name' => 'Sony',
                'description' => 'Sony Corporation is a Japanese multinational conglomerate known for its electronics, including smartphones and gaming consoles.'
            ],
        ];

        foreach ($brands as $row) 
        {
            Brand::create($row);
        }
    
    }
}
