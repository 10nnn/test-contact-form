<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function index()
  {
    return view('index');
  }

  public function confirm(Request $request)
  {
    $contact = $request->only([
        'last_name',
        'first_name',
        'gender',
        'email',
        'tel_1',
        'tel_2',
        'tel_3',
        'address',
        'building',
        'category',
        'detail',
    ]);

    return view('confirm', compact('contact'));
  }

}
