<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassName;
use App\Http\Requests\storeHsRequest;
use App\Http\Requests\StoreStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "abc";
        $Students = Student::all();
        // // $ClassNames = ClassName::find(2)->Students->toArray();
        return view('student.list', ['Students' => $Students]);
        // print_r($Students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ClassNames = ClassName::all();
        // $ClassNames = ClassName::find(2)->Students->toArray();
        return view('student.create', ['ClassNames' => $ClassNames]);
        print_r($ClassNames);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {

        $Student = new Student;
        $Student->name_student = $request->name;
        $Student->address = $request->address;
        $Student->id_class = $request->idclass;
        $Student->save();
        return redirect()->route('student.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo 'ok';
        //$Student = Student::find($id);
        //echo $Student->name_student;
        $Student = Student::find($id)->toArray();

        $ClassName = Student::find($id)->ClassName->toArray();
        //$ClassName = Student::find($id)->ClassName;
        //  print_r($ClassName);
        


        return view('student.show', ['Student' => $Student, 'ClassName' => $ClassName]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Student = Student::find($id);
        $ClassName = Student::find($id)->ClassName;
        return view('student.edit', ['Student' => $Student, 'ClassName' => $ClassName]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function deleteStudent(Request $request){
        $flight = Student::find($request->id);

        $flight->delete();

        return redirect()->route('student.index');
    }

    public function updateStudent(StoreStudentRequest $request){

        $flight = Student::find($request->id);

        $flight->update(['name_student' => $request->name , 'address' => $request->address]);

        return redirect()->route('student.index');
    }
}
