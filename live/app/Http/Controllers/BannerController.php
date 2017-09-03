<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Illuminate\Support\Str;
use File;
use Image;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $banner_list=Banner::orderBy('id','DESC')->paginate(10);
       return view('backend.banner.table',compact('banner_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.banner.create');
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
            'title' => 'required|unique:banners',
            'image'=>'required',
        ]);
        $banner=new Banner();
        $banner->title=$request->title;
        $banner->slug=$slug = Str::slug($banner->title, '_');
        /*image upload start*/
        $destination_path = 'uploads/banners';
        $name= time() . "-" . $request->file('image')->getClientOriginalName();
        $image = $destination_path . '/' .$name;
        $request->file('image')->move($destination_path, $image);
        $this->upload_image($image,$name);
        /*image upload end*/
        $banner->image=$name;
        $banner->status=($request->status)?1:0;
            $result=$banner->save();
        if($result){
            session()->flash('message', 'Banner Saved Succefully.');
            return redirect('home/banner');
        }
        else{
            session()->flash('message', 'Something Went Wrong! Please Try Again.');
            return redirect()->back()->withInput();
        }

    }

    public function upload_image($image,$name) {
        $image = Image::make($image);
        $path = 'uploads/banners_resize/';
        $image->resize(1351,400);
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

        $banner=Banner::find($id);
        return view('backend.banner.edit',compact('banner'));
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
        $banner=Banner::find($id);
        $banner->title=$request->title;
        $banner->slug=$slug = Str::slug($banner->title, '_');
        /*image upload*/
        if ($request->file('image')!='') {
//                die('here');
            $destination_path = 'uploads/banners';
            $name= time() . "-" . $request->file('image')->getClientOriginalName();
            $image = $destination_path . '/' .$name;

            $request->file('image')->move($destination_path, $image);
            $this->upload_image($image,$name);
            if(file_exists($destination_path.'/'.$banner->image)){
                unlink($destination_path.'/'.$banner->image);
                unlink('uploads/banners_resize/'.$banner->image);

            }

        }
        else{
            $name=$banner->image;
        }
        $banner->image=$name;
        $banner->status=($request->status)?1:0;
        $result=$banner->save();
        if($result){
            session()->flash('message', 'Banner Updated Succefully.');
            return redirect('home/banner');
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
        Banner::find($id)->delete();
        session()->flash('message', 'Banner Deleted Successfully.');
        return redirect('home/banner');
    }
}
