<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReCaptchataTestFormRequest;

class ContactController extends Controller
{
    public function index()
    {
      return view('contact');
    }

    public function store(ReCaptchataTestFormRequest $request)
    {
      return "Done right! :-)";
    }
}
