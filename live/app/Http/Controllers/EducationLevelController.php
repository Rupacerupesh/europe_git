<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducationLevel;
use Illuminate\Support\Str;
use File;


class EducationLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $educationlevel=EducationLevel::orderBy('id','DESC')->paginate(10);
       return view('backend.educationlevel.table',compact('educationlevel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.educationlevel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     // dd($request);
        $this->validate($request,[
            'title' => 'required',
          
        ]);
        $educationlevel=new EducationLevel();
        $educationlevel->title=$request->title;
        $educationlevel->slug=$slug = Str::slug($educationlevel->title, '_');
  
        $educationlevel->status=($request->status)?1:0;
            $result=$educationlevel->save();
        if($result){
            session()->flash('message', 'educationlevel Saved Succefully.');
            return redirect('home/educationlevel');
        }
        else{
            session()->flash('message', 'Something Went Wrong! Please Try Again.');
            return redirect()->back()->withInput();
        }

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
    public function edit($id)
    {

        $educationlevel=EducationLevel::find($id);
        return view('backend.educationlevel.edit',compact('educationlevel'));
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
        $this->validate($request,[
            'title' => 'required',
           
        ]);
        $educationlevel=EducationLevel::find($id);
        $educationlevel->title=$request->title;
        $educationlevel->slug=$slug = Str::slug($educationlevel->title, '_');
      
        $educationlevel->status=($request->status)?1:0;
        $result=$educationlevel->save();
        if($result){
            session()->flash('message', 'educationlevel Updated Succefully.');
            return redirect('home/educationlevel');
        }
        else{
            session()->flash('message', 'Something Went Wrong! Please Try Again.');
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EducationLevel::find($id)->delete();
        session()->flash('message', 'educationlevel Deleted Successfully.');
        return redirect('home/educationlevel');
    }
}
