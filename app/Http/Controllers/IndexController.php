<?php

namespace App\Http\Controllers;

use App\Models\Twandyear;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $tw = Twandyear::where('id', '1')->first();
        return view('user.index', compact('tw'));
    }
}
