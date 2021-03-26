<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassName;
use App\Http\Requests\storeHsRequest;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "abc";
        $ClassNames = ClassName::all();
        // $ClassNames = ClassName::find(2)->Students->toArray();
        return view('classname.list', ['ClassNames' => $ClassNames]);
        // print_r($ClassNames);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('classname.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeHsRequest $request)
    {
        $ClassName = new ClassName;
        $ClassName->name_class = $request->name;
        $ClassName->save();
        return redirect()->route('classname.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo 'show';
        
        // return redirect()->route('classname.list');
        $Students = ClassName::find($id)->Students;
        return view('student.list', ['Students' => $Students]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo 'ok';
        $ClassName = ClassName::find($id);
        // $ClassName = ClassName::find($id)->toArray();
        return view('classname.edit', ['ClassName' => $ClassName]);
        // print_r($ClassName);
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
        // $ClassName = ClassName::find($id);
        // $ClassName->name_class = $request->name;
        // $ClassName->save();
        // return redirect()->route('classname.edit');
        // echo $id;
        echo 'ok';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo $id;
        // ClassName::destroy($id);
        // echo 'abcj';
        // $ClassName = ClassName::find($id);
        // $ClassName->delete();
        // $ClassName = ClassName::find($id)->toArray();
        // print_r($ClassName);
        // ClassName::destroy($id);
        // $ClassName = ClassName::find($id);
        // $ClassName->delete();
        // return redirect()->route('classname.list');
    }

    public function deleteClass(Request $request)
    {
        $flight = ClassName::find($request->id);

        $flight->delete();

        return redirect()->route('classname.index');
    }

    public function updateClass(storeHsRequest $request){

        // $ClassName = ClassName::find($id);
        // // $ClassName = ClassName::find($id)->toArray();
        // return view('classname.edit', ['ClassName' => $ClassName]);

        // echo 'ok';

        // $ClassName = ClassName::find($id);
        // $ClassName = ClassName::find($id)->toArray();
        // return view('classname.edit', ['ClassName' => $ClassName]);
        // echo $request->id;
        // echo $request->name;

        $flight = ClassName::find($request->id);

        $flight->update(['name_class' => $request->name]);

        return redirect()->route('classname.index');
    }
}
