<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Device;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $categories= Category::all();

        $query = Device::query();

        // Apply filters based on the request
        if ($request->has('category') && $request->category != 'All') {
            $query->where('category_id', $request->category);
        }

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $query->where('name', 'like', "%{$searchTerm}%");
        }

        $data = [
            'product' => $query->get(),
            'categories' => $categories
        ];

        // dd($data);

        return view('frontend/home', $data);
    }

    
}
