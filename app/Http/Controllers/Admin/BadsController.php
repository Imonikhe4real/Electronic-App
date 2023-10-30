<?php

namespace App\Http\Controllers\Admin;

use App\Good;
use App\User;
use App\Bad;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BadsController extends Controller
{
    public function index()
    {

        $goods = Good::count();
        $bads = Bad::count();

        $users = User::all()->count();

        $data = Bad::all();
         return view('admin.bads.index',compact('data','goods','bads','users'));

    }
    public function show($id)
    {
        $data = Bad::findOrFail($id);
          return view('admin.bads.view',compact('data'));
    }
    public function edit($id)
    {
                  
        $data = Bad::findOrFail($id);
        return view('admin.bads.edit',compact('data'));
    }
    public function update(Request $request, $id)
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
            Bad::whereId($id)->update($form_data);
            return redirect()->route('admin.bads.index')->with('success','Bad Product Updated Successfully');
    }
    public function destroy($id)
    {
        $data = Bad::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.bads.index')->with('success','Bad Product Deleted Successfully');
    }
}
