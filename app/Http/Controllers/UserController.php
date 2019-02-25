<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

use Notification;


class UserController extends Controller
{
    
  public function getShow($id = null){
      if(!$id){
        $id = Auth::id();
      }
      $user = User::findOrFail($id);
    
    return view('user.show', array('User'=>$user));
  }

  public function getEdit($id = null){
    if(!$id){
      $id = Auth::id();
     }
     $user = User::findOrFail($id);
  
    return view('user.edit', array('User'=>$user));
  }

      public function putEdit(Request $request,$id = null)
    {
      if(!$id){
        $id = Auth::id();
       }
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->subscription = $request->input('subscription');
        $user->userAge = $request->input('userAge');
        $user->save();
        Notification::success('Success message');
        
        return redirect('/user/edit/'.$id);
    }

    public function getCreate()
    {
        return view('user.create');
    }

    public function postCreate(Request $request)
    {      
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->subscription = $request->input('subscription');
        $user->userAge = $request->input('userAge');
        $user->save();
        Notification::success('Success message');
        return redirect('user/add');
        
    }
}