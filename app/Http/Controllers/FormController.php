<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function show(Request $request)
    {

        $request->validate([
            'email' => 'required|email:rfc',
            'name' => 'required|min:3|max:30',
            'phoneNumber' => 'required|numeric',
            'gpa' => 'required|numeric|between:2.00,4.00',
            'profilePicture' => 'required|max:2048|mimes:jpg,jpeg,png'
        ]);

        $request->profilePicture->storeAs('public/images', $request->profilePicture->getClientOriginalName());

        $results = [
            'email' => $request->email,
            'name' => $request->name,
            'phoneNumber' => $request->phoneNumber,
            'gpa' => $request->gpa,
            'profilePicture' => $request->profilePicture->getClientOriginalName(),
        ];

        return redirect('/result')->with(['result' => $results, 'status' => 'success']);
    }

    public function result() {
        $results = session()->get('result');

        return view('result',[
            'results' => $results
        ]);
    }
}