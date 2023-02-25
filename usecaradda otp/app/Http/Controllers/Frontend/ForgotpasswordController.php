<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotpasswordController extends Controller
{
    public function index()
    {
        return view('frontend.forgotpassword');
    }
}
