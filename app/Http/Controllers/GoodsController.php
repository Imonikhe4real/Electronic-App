<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function create()
    {
        return view('goods.create');
    }
    public function store(Request $request)
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
        
        Good::create($form_data);
        return back()->with('success','Good Product Added Successfully');

    }
}
