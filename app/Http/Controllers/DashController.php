<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{ 
    public function profile(){
        return view('dashboard.profile');
    }
}
