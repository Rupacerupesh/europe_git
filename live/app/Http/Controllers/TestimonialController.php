<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use Illuminate\Support\Str;


class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$testimonial=Testimonial::orderBy('id','DESC')->paginate(10);
    	return view('backend.testimonial.table',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    	return view('backend.testimonial.create');
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
    		'fullname' => 'required',
    		'description' => 'required',
    		'address' => 'required',

    		]);
    	$testimonial=new Testimonial();
    	$testimonial->fullname=$request->fullname;
    	$testimonial->description=$request->description;
    	$testimonial->address=$request->address;


    	$testimonial->status=($request->status)?1:0;
    	$result=$testimonial->save();
    	if($result){
    		session()->flash('message', 'Testimonial Saved Succefully.');
    		return redirect('home/testimonial');
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

    	$testimonial=Testimonial::find($id);
    	return view('backend.testimonial.edit',compact('testimonial'));
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
    		'fullname' => 'required',
    		'description' => 'required',
    		'address' => 'required',

    		]);
    	$testimonial=Testimonial::find($id);
    	$testimonial->fullname=$request->fullname;
    	$testimonial->description=$request->description;
    	$testimonial->address=$request->address;

    	$testimonial->status=($request->status)?1:0;
    	$result=$testimonial->save();
    	if($result){
    		session()->flash('message', 'Testimonial Updated Succefully.');
    		return redirect('home/testimonial');
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
    	Testimonial::find($id)->delete();
    	session()->flash('message', 'Testimonial Deleted Successfully.');
    	return redirect('home/testimonial');
    }
}
