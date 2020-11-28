<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function searchProduct(Request $request){
        $data = $request->get('data');

        $product = Product::where('name', 'like', "%{$data}%")
                 ->orWhere('category_id', 'like', "%{$data}%")
                 ->get();

        return response()->json(['data' => $product->toArray()], 201);
    }
}
