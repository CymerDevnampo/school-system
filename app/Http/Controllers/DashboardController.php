<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function teacher()
    {
        return view('dashboard.teacher');
    }

    public function student()
    {
        return view('dashboard.student');
    }

}
