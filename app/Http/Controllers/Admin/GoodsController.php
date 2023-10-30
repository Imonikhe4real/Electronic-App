<?php

namespace App\Http\Controllers\Admin;

use App\Bad;
use App\User;
use App\Good;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index(Request $request)
    {

        $goods = Good::count();
        $bads = Bad::count();

        $users = User::all()->count();


         $data = Good::all();
         return view('admin.goods.index',compact('data','goods','bads','users'));
    }
    public function show($id)
    {
          $data = Good::findOrFail($id);
          return view('admin.goods.view',compact('data'));        
    }
    public function edit($id)
    {
          
        $data = Good::findOrFail($id);
        return view('admin.goods.edit',compact('data'));

    }
    public function update(Request $request,$id)
    {
        $request->validate([
              'electronics' => 'required',
              'price' => 'required',
              'status' => 'required',
              'email' => 'required',
        ]);     
        $form_data = array(
               'electronics' => $request->electronics,
               'price' => $request->price,
               'status' => $request->status,
               'email' => $request->email,
            );
            Good::whereId($id)->update($form_data);
            return redirect()->route('admin.goods.index')->with('success','Good Product Updated Successfully'); 
    }
    public function destroy($id)
    {

        $data = Good::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.goods.index')->with('success','Good Product Deleted Successfully');
      }

}
