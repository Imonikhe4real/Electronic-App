<?php

namespace App\Http\Controllers;

use App\Bad;
use Illuminate\Http\Request;

class BadsController extends Controller
{
    public function create()
    {
        return view('bads.create');
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
        
        Bad::create($form_data);
        return back()->with('success','Bad Product Added Successfully');

    }
}
