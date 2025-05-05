<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function hobby(){
        return view('hobby');
    }
}

// use App\Http\Requests\PostRequest;

// public function submitContact(PostRequest $request)
// {
//     //Proses data yang valid
//     return back()->with('success', 'Your massage has been submited successfully');
// }