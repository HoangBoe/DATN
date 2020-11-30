<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Lanin\Laravel\ApiDebugger\Debugger;

class SearchController extends Controller
{
    //
    public function searchProduct(Request $request, Product $product){
        $data = $request->get('data');
        // Search for a user based on their name.
        if ($request->has('name')) {
            return $product->where('name', $request->input('name'))->get();
        }

        // Search for a user based on their company.
        if ($request->has('category_id')) {
            return $product->where('category_id', $request->input('category_id'))
                ->get();
        }

        // Search for a user based on their city.

        return Product::all();
    }
}
