<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InterestedCourse;
use Illuminate\Support\Str;

use File;
use Image;

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
            // 'image' => 'required',
          
        ]);
        $interestedcourse=new InterestedCourse();
        $interestedcourse->title=$request->title;
        $interestedcourse->slug=$slug = Str::slug($interestedcourse->title, '_');
  $destination_path = 'uploads/banners';
        // dd($interestedcourse);
        $name= time() . "-" . $request->file('image')->getClientOriginalName();
        $image = $destination_path . '/' .$name;
        $request->file('image')->move($destination_path, $image);
        $this->upload_image($image,$name);
         $interestedcourse->image=$name;
        // $this->upload_image($image,$name);
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
  public function upload_image($image,$name) {
        $image = Image::make($image);
    $path = 'uploads/banners_resize/';
        $image->resize(50,50);
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
          if ($request->file('image')!='') {
//                die('here');
            $destination_path = 'uploads/banners/';
            $name= time() . "-" . $request->file('image')->getClientOriginalName();
            $image = $destination_path . '/' .$name;

            $request->file('image')->move($destination_path, $image);
            $this->upload_image($image,$name);
            if(file_exists($destination_path.'/'.$interestedcourse->image)){
                unlink($destination_path.'/'.$interestedcourse->image);
                unlink('uploads/banners_resize/'.$interestedcourse->image);

            }

        }
        else{
            $name=$interestedcourse->image;
        }
        $interestedcourse->image=$name;
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
