<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function show($id)
    {
        return Mobile::find($id)->customer;
    }
}
