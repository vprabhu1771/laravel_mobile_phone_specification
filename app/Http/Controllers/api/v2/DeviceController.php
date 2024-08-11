<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Device;

class DeviceController extends Controller
{
    //
    public function show($modelNumber)
    {
        $device = Device::where('model_number', $modelNumber)->with(['specifications', 'features'])->firstOrFail();

        return response()->json($device);
    }
}
