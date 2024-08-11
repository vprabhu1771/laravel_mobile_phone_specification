<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            ['name' => 'Laptop'],
            ['name' => 'Desktop'],
            ['name' => 'Ram'],
            ['name' => 'Mother Board'],
            ['name' => 'Smart Phone'],
        ];

        foreach ($categories as $row) 
        {
            Category::create($row);
        }
    }
}
