<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
      $Product = Product::all();
      return response()->json($Product);
    }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
      $fields = $request->validate([
        'qte' => 'required|max:20',
        'status' => 'required|max:20',
        'price' => 'required|max:20',
        'user_id' => 'required|max:20',
        'categorie_id' => 'required|max:20',
        'image' => 'required'
      ]);
      $fields['image']=$request->file('image')->store('/product','public');
      Product::create($fields);
      return response()->json(['created']);
    }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Product $Product)
  {
    $fields = $request->validate([
        'qte' => 'required|max:20',
        'status' => 'required|max:20',
        'price' => 'required|max:20',
        'user_id' => 'required|max:20',
        'categorie_id' => 'required|max:20',
        'image' => 'required'
    ]);
    if($request->hasFile('image')){
      $fields['image']=$request->file('image')->store('/product','public');
    }
    $Product->update($fields);
    return response()->json(['updated']);
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Product $Product)
  {
    $Product->delete();
    return response()->json(['success', 'Product deleted successfully']);
          }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('Product.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Product $Product)
  {
    return response()->json($Product);
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

}
