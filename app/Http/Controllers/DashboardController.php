<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classes;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

    
        $Student_data = Student::with('Classes','Country')->get();
        // dd($Student_data);
         return view('Students.index',compact('Student_data')); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Students.AddNewStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required'],
            'class_id' => ['required'],
            'country_id' => ['required'],
            'date_of_birth'=> ['required'],

        ]);
       
        Student::create($request->all()); 
       return redirect()->route('Students.index');
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
    public function edit(Student $Student)
    {

        return view('Students.EditStudentData',compact('Student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $Student)
    {
        $request->validate([
            'name' => ['required'],
            'class_id' => ['required'],
            'country_id' => ['required'],
            'date_of_birth'=> ['required'],
           
        ]);

        $Student->update($request->all());

        return redirect()->route('Students.index')->with('success',' Updated Student Data successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Student->delete();
    
        return redirect()->route('Students.index')->with('success',' Student Data deleted successfully');
    }
}
  
