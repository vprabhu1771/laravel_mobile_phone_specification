<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Device;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $devices = Device::all();

        $features = [
            [
                'device_id' => $devices->where('model_number', 'Galaxy S21')->first()->id,
                'feature' => '5G Connectivity'
            ],
            [
                'device_id' => $devices->where('model_number', 'iPhone 13 Pro')->first()->id,
                'feature' => 'Face ID'
            ],
            [
                'device_id' => $devices->where('model_number', 'XPS 13')->first()->id,
                'feature' => 'InfinityEdge Display'
            ],
            [
                'device_id' => $devices->where('model_number', 'ROG Strix B550-F')->first()->id,
                'feature' => 'PCIe 4.0 Support'
            ],
            [
                'device_id' => $devices->where('model_number', 'Vengeance LPX 16GB')->first()->id,
                'feature' => 'Low Profile Design'
            ]
        ];

        foreach ($features as $row) 
        {
            Feature::create($row);
        }
    }
}
