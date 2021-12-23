<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return view('sub.profile', [
            'profiles' => Staff::all(),
        ]);
    }
}
