<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Device;
use App\Models\Specification;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $devices = Device::all();

        $specifications = [
            [
                'device_id' => $devices->where('model_number', 'Galaxy S21')->first()->id,
                'key' => 'Screen Size',
                'value' => '6.2 inches'
            ],
            [
                'device_id' => $devices->where('model_number', 'iPhone 13 Pro')->first()->id,
                'key' => 'Camera',
                'value' => '12MP Triple Camera'
            ],
            [
                'device_id' => $devices->where('model_number', 'XPS 13')->first()->id,
                'key' => 'Processor',
                'value' => 'Intel Core i7'
            ],
            [
                'device_id' => $devices->where('model_number', 'ROG Strix B550-F')->first()->id,
                'key' => 'Chipset',
                'value' => 'AMD B550'
            ],
            [
                'device_id' => $devices->where('model_number', 'Vengeance LPX 16GB')->first()->id,
                'key' => 'Capacity',
                'value' => '16GB'
            ]
        ];

        foreach ($specifications as $row) 
        {
            Specification::create($row);
        }
    }
}
