<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Str;
use File;
use Image;
use App\Navigation;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $course_list=Course::orderBy('id','DESC')->paginate(10);
     return view('backend.course.table',compact('course_list'));
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('backend.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required',
            // 'image'=>'required',
            'description'=>'required',
            'fee'=>'required|numeric',
            ]);
        $course=new course();
        $course->title=$request->title;
        $course->description=$request->description;
        $course->fee=$request->fee;
        $course->slug=$slug = Str::slug($course->title, '_');
        $course->status=($request->status)?1:0;
        $result=$course->save();
        if($result){
            session()->flash('message', 'Course Saved Succefully.');
            return redirect('home/course');
        }
        else{
            session()->flash('message', 'Something Went Wrong! Please Try Again.');
            return redirect()->back()->withInput();
        }

    }

    public function upload_image($image,$name) {
        $image = Image::make($image);
        $path = 'uploads/courses_resize/';
        $image->resize(1920,700);
        // save resized
        $image->save($path.$name);
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

        $course=Course::find($id);
        return view('backend.course.edit',compact('course'));
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
            // 'image'=>'required',
        'description'=>'required',
        'fee'=>'required|numeric',
        ]);
      
       $course=Course::find($id);
       $course->title=$request->title;
       $course->description=$request->description;
       $course->fee=$request->fee;
        $course->slug=$slug = Str::slug($course->title, '_');
        $course->status=($request->status)?1:0;
        $result=$course->save();
        if($result){
            session()->flash('message', 'Course Updated Succefully.');
            return redirect('home/course');
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
        Course::find($id)->delete();
        session()->flash('message', 'Course Deleted Successfully.');
        return redirect('home/course');
    }
}
