<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Device;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = Category::all();
        $brands = Brand::all();

        $devices = [
            [
                'category_id' => $categories->where('name', 'Smartphone')->first()->id,
                'brand_id' => $brands->where('name', 'Samsung')->first()->id,
                'model_number' => 'Galaxy S21',
                'series' => 'Mobile',
                'name' => 'Samsung Galaxy S21',
                'description' => 'Latest Samsung Galaxy S21 smartphone.'
            ],
            [
                'category_id' => $categories->where('name', 'Smartphone')->first()->id,
                'brand_id' => $brands->where('name', 'Apple')->first()->id,
                'model_number' => 'iPhone 13 Pro',
                'series' => 'Mobile',
                'name' => 'Apple iPhone 13 Pro',
                'description' => 'Newest iPhone 13 Pro with A15 Bionic chip.'
            ],
            [
                'category_id' => $categories->where('name', 'Laptop')->first()->id,
                'brand_id' => $brands->where('name', 'Dell')->first()->id,
                'model_number' => 'XPS 13',
                'series' => 'Laptop',
                'name' => 'Dell XPS 13',
                'description' => 'High-performance Dell XPS 13 laptop.'
            ],
            [
                'category_id' => $categories->where('name', 'Motherboard')->first()->id,
                'brand_id' => $brands->where('name', 'ASUS')->first()->id,
                'model_number' => 'ROG Strix B550-F',
                'series' => 'Motherboard',
                'name' => 'ASUS ROG Strix B550-F',
                'description' => 'ASUS ROG Strix B550-F motherboard.'
            ],
            [
                'category_id' => $categories->where('name', 'RAM')->first()->id,
                'brand_id' => $brands->where('name', 'Corsair')->first()->id,
                'model_number' => 'Vengeance LPX 16GB',
                'series' => 'RAM',
                'name' => 'Corsair Vengeance LPX 16GB',
                'description' => 'Corsair Vengeance LPX 16GB DDR4 RAM.'
            ]
        ];

        foreach ($devices as $row) 
        {
            Device::create($row);
        }
    }
}
