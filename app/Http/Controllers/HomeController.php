<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('index');
    // }
    public function index()
    {
        $studentCount = Student::count(); // Get the total count of students

        return view('dashboard.admin', compact('studentCount'));
    }

    public function MyAccount()
    {
        return view('my-account');
    }

    public function list()
    {
        return view('students.list');
    }
}
