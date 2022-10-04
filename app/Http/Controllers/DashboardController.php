<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classes;
use App\Models\Country;
use Carbon\Carbon;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

         // get the data of student 
        $Student_data = Student::with('Classes','Country')->get();
       // Count of students per country 
       $NOStudentInCountry = Country::with('student')->get();
      //dd( $NOStudentInClass);
      // Count of students per class 
      $NOStudentInClass = Classes::with('student')->get();
      //dd( $NOStudentInClass);
       // dd($Student_data);

        return view('Students.index',compact('Student_data', 'NOStudentInClass','NOStudentInCountry'));

        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Student_data = Student::with('Classes','Country')->get();
        return view('students.AddNewStudent',compact('Student_data'));
        
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
            'date_of_birth'=> ['required'],
            'class_id' => ['required'],
            'country_id' => ['required'],
        

        ]);
        $new_record=new Student();
        $new_record->name=$request->name;
        $new_record->date_of_birth=$request->date_of_birth;
        $new_record->class_id=$request->class_id;
        $new_record->country_id=$request->country_id;
        $new_record->save();
        
       return redirect()->route('Students.index')->with('success','new data of Students add successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $Student_data)
    {
        $Student_data = Student::with('Classes','Country')->get();
        return view('Students.EditStudentData',compact('Student_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $Students)
    {
        
        $request->validate([
            'name' => ['required'],
            'class_id' => ['required'],
            'country_id' => ['required'],
            'date_of_birth'=> ['required'],
           
        ]);

        $Students->update($request->all());

        return redirect()->route('Students.index')->with('success',' Updated Student Data successfully');
    }
    

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $Students)
    {  
        $Students->delete();

        return redirect()->route('Students.index')->with('success','Student data are deleted successfully');
    }

     

   
}
  
