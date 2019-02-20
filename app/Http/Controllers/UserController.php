<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

use Notification;


class UserController extends Controller
{
    
    public function getShow($id)
    {
    $user = User::findOrFail($id);

		return view('user.show', array('User'=>$user));
  }


  public function getEdit($id = null)
  {
   if(!$id){
    $id = Auth::id();
   }
   $user = User::findOrFail($id);

  return view('user.show', array('User'=>$user));
}

}