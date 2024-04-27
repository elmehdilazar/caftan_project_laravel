<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCartRequest;

class CartController extends Controller
{
    public function index()
    {
      $Cart = Cart::all();
      return response()->json($Cart);
    }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
      $fields = $request->validate([
        'prod_id' => 'required|max:20',
        'session_id' => 'required|max:20',
        'qte' => 'required|max:20',
        'size' => 'required|max:20',
        'mesure' => 'required|max:20'
      ]);
      Cart::create($fields);
      return response()->json(['created']);
    }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Cart $Cart)
  {
    $fields = $request->validate([
        'prod_id' => 'required|max:20',
        'session_id' => 'required|max:20',
        'qte' => 'required|max:20',
        'size' => 'required|max:20',
        'mesure' => 'required|max:20'
    ]);
    $Cart->update($fields);
    return response()->json(['updated']);
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Cart $Cart)
  {
    $Cart->delete();
    return response()->json(['success', 'Cart deleted successfully']);
          }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('Cart.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Cart $Cart)
  {
    return response()->json($Cart);
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
}
