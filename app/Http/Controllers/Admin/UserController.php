<?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Role;
use App\Good;
use App\Bad;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $goods = Good::count();
       $bads = Bad::count();

       $users = User::all()->count();




       $data = User::all();

       return view('admin.users.index',compact('data','goods','bads','users'));

    //    return view('admin.users.index',compact('data','goods','bads','users'))->with('i',(request()->input('page',1) -1 ) * 2);
   }
   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */
   public function edit(User $user)
   {
        if (Gate::denies('edit-users')) {
             return redirect(route('admin.users.index'));
        }

       $roles = Role::all();

       return view('admin.users.edit')->with([
         'user' => $user,
         'roles' => $roles,
       ]);
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, User $user)
   {

       $user->firstname = $request->firstname;
       $user->lastname = $request->lastname;
       $user->email = $request->email;
       $user->mobile = $request->mobile;
       $user->gender = $request->gender;
       $user->password = $request->password;
       $user->address = $request->address;
       $user->save();

       


       $user->roles()->sync($request->roles);

       return redirect()->route('admin.users.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\User  $user
    * @return \Illuminate\Http\Response
    */
   public function destroy(User $user)
   {
       if(Gate::denies('delete-users')) {
             return redirect(route('admin.users.index'));
        }

       $user->roles()->detach();
       $user->delete();

       return redirect()->route('admin.users.index'); 
   }
   
}
