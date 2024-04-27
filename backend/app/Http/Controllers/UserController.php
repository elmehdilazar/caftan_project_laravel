<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
      $users = User::all();
      return response()->json($users);
    }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
      $usersField = $request->validate([
        'Firstname' => 'required|max:20',
        'Lastname' => 'required|max:40',
        'email' => 'required|max:100',
        'is_admin'=>'required|max:20',
        'is_active'=>'required|max:20',
        'password' => 'required|max:300'
      ]);
      $usersField['password']=Hash::make($request->password);
      User::create($usersField);
      return response()->json(['created']);
    }
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, User $user)
  {
    $usersField = $request->validate([
        'Firstname' => 'required|max:20',
        'Lastname' => 'required|max:40',
        'email' => 'required|max:100',
        'is_admin'=>'required|max:20',
        'is_active'=>'required|max:20',
        'password' => 'required|max:300'
    ]);
    $user->update($usersField);
    $usersField['password']=Hash::make($request->password);
    return response()->json(['updated']);
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    $user->delete();
    return response()->json(['success', 'user deleted successfully']);
          }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('user.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(User $user)
  {
    return response()->json($user);
  }
}
