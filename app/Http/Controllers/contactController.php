<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\welcome;

class contactController extends Controller
{
    //
    public function welcome () {
        $welcome = new welcome;
        $message = $welcome->messageWelcome();
        return view('welcome', ['message' => $message]);
    }
}
