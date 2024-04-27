<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\categorie_product;
use App\Http\Requests\Storecategorie_productRequest;
use App\Http\Requests\Updatecategorie_productRequest;

class CategorieProductController extends Controller
{
    public function index()
    {
      $Category_product = Categorie_product::all();
      return response()->json($Category_product);
    }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
      $fields = $request->validate([
        'name' => 'required|max:20'
      ]);
      Categorie_product::create($fields);
      return response()->json(['created']);
    }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Categorie_product $Categorie_product)
  {
    $fields = $request->validate([
        'name' => 'required|max:20'
    ]);
    $Categorie_product->update($fields);
    return response()->json(['updated']);
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Categorie_product $Categorie_product)
  {
    $Categorie_product->delete();
    return response()->json(['success', 'Category product deleted successfully']);
          }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('Category_product.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Categorie_product $Categorie_product)
  {
    return response()->json($Categorie_product);
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
}
