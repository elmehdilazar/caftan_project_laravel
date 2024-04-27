<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller

    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $products = Product::all();
        return response()->json($products);
    
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            return $Product = Product::create($request->all());
            return response()->json($Product, 201);;
        }
    
        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            $Product = Product::findOrFail($id);
            return response()->json($Product);
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            //
        }
    }
    

