<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InterestedCourse;
use Illuminate\Support\Str;



class InterestedCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $interestedcourse=InterestedCourse::orderBy('id','DESC')->paginate(10);
       return view('backend.interestedcourse.table',compact('interestedcourse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.interestedcourse.create');
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
        $interestedcourse=new InterestedCourse();
        $interestedcourse->title=$request->title;
        $interestedcourse->slug=$slug = Str::slug($interestedcourse->title, '_');
  
        $interestedcourse->status=($request->status)?1:0;
            $result=$interestedcourse->save();
        if($result){
            session()->flash('message', 'interestedcourse Saved Succefully.');
            return redirect('home/interestedcourse');
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

        $interestedcourse=InterestedCourse::find($id);
        return view('backend.interestedcourse.edit',compact('interestedcourse'));
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
        $interestedcourse=InterestedCourse::find($id);
        $interestedcourse->title=$request->title;
        $interestedcourse->slug=$slug = Str::slug($interestedcourse->title, '_');
      
        $interestedcourse->status=($request->status)?1:0;
        $result=$interestedcourse->save();
        if($result){
            session()->flash('message', 'interestedcourse Updated Succefully.');
            return redirect('home/interestedcourse');
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
        InterestedCourse::find($id)->delete();
        session()->flash('message', 'interestedcourse Deleted Successfully.');
        return redirect('home/interestedcourse');
    }
}
