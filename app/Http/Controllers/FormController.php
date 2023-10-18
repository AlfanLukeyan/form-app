<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function addClient(Request $request)
    {

        $request->validate([
            'email' => 'required|email:rfc',
            'name' => 'required|min:3|max:30',
            'phone_number' => 'required|numeric',
            'gpa' => 'required|numeric|between:2.00,4.00',
            'profile_picture' => 'required|max:2048|mimes:jpg,jpeg,png'
        ]);

        
        $file_name ="{$request->email}-{$request->profile_picture->getClientOriginalName()}";
        $request->profile_picture->storeAs('public/images', $file_name);
        
        client::create ([
            'email' => $request->email,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'gpa' => $request->gpa,
            'profile_picture' => $file_name
        ]);
        
        return redirect('/result')->with(['status' => 'Success Create New Client']);
    }

    public function result() {
        $clients = client::latest()->first();

        return view('result',
        [
            'results' => $clients
        ]
    );
    }
}