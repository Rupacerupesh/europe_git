<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facility;
use Illuminate\Support\Str;
use File;
use Image;


class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $facility=Facility::orderBy('id','DESC')->paginate(10);
       return view('backend.facility.table',compact('facility'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.facility.create');
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
            'logo' => 'required',
          
        ]);
        $facility=new Facility();
        $facility->title=$request->title;
        $facility->slug=$slug = Str::slug($facility->title, '_');
        $facility->logo=$request->logo;
        $facility->status=($request->status)?1:0;
            $result=$facility->save();
        if($result){
            session()->flash('message', 'Facility Saved Succefully.');
            return redirect('home/facility');
        }
        else{
            session()->flash('message', 'Something Went Wrong! Please Try Again.');
            return redirect()->back()->withInput();
        }

    }
    public function upload_image($image,$name) {
        $image = Image::make($image);
        $path = 'uploads/facility_resize/';
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

        $facility=Facility::find($id);
        return view('backend.facility.edit',compact('facility'));
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
        $facility=facility::find($id);
        $facility->title=$request->title;
        $facility->slug=$slug = Str::slug($facility->title, '_');
        $facility->logo=$request->logo;
        $facility->status=($request->status)?1:0;
        $result=$facility->save();
        if($result){
            session()->flash('message', 'Facility Updated Succefully.');
            return redirect('home/facility');
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
        Facility::find($id)->delete();
        session()->flash('message', 'facility Deleted Successfully.');
        return redirect('home/facility');
    }
}
