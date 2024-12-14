<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
            'age' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'regex:/^\d{11}$/'],
            'religion' => ['required', 'string', 'max:255'],
            'course' => ['required', 'string', 'max:255'],
            'year' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],

        ]);
    }


    public function index()
    {
        // LATEST() = PASABOT MAG UNA ANG KINSAY BAG ONG GI ADD
        // $students = Student::latest()->paginate(5); 

        $students = Student::paginate(10);

        return view('students.list', compact('students'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {
        return view('students.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        // Validate the request data
        $data = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students'], // Assuming students table for storing student data
            'gender' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
            'age' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'regex:/^\d{11}$/'],
            'religion' => ['required', 'string', 'max:255'],
            'course' => ['required', 'string', 'max:255'],
            'year' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
        ]);

        // Create a new Student instance with the validated data
        $student = new Student($data);

        // Save the student to the database
        $student->save();

        // Redirect to a success page or wherever you want
        return redirect()->route('list')->with('success', 'Student added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Student $student)
    {
        $data = request()->validate([
            'name' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'religion' => 'required',
            'course' => 'required',
            'year' => 'required',
            'section' => 'required',
        ]);

        // Update the student with the validated data
        $student->update($data);

        return redirect()->route('list')->with('success', 'Student updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
