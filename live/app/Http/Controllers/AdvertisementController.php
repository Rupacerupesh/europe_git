<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advertisement;
use Illuminate\Support\Str;
use File;
use Image;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $advertisement_list=Advertisement::orderBy('id','DESC')->paginate(10);
     
       return view('backend.advertisement.table',compact('advertisement_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.advertisement.create');
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
            'title' => 'required|unique:advertisement',
            'url' => 'required',
            'image'=>'required',
        ]);
        $advertisement=new Advertisement();
        $advertisement->title=$request->title;
        $advertisement->slug=$slug = Str::slug($advertisement->title, '_');
        /*image upload start*/
        $destination_path = 'uploads/advertisements';
        $name= time() . "-" . $request->file('image')->getClientOriginalName();
        $image = $destination_path . '/' .$name;
        $request->file('image')->move($destination_path, $image);
        $this->upload_image($image,$name);
        /*image upload end*/
        $advertisement->image=$name;
        $advertisement->url=$request->url;
        $advertisement->status=($request->status)?1:0;
            $result=$advertisement->save();
        if($result){
            session()->flash('message', 'Advertisement Saved Succefully.');
            return redirect('home/advertisement');
        }
        else{
            session()->flash('message', 'Something Went Wrong! Please Try Again.');
            return redirect()->back()->withInput();
        }

    }

    public function upload_image($image,$name) {
        $image = Image::make($image);
        $path = 'uploads/advertisements_resize/';
        $image->resize(360,340);
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

        $advertisement=Advertisement::find($id);
        return view('backend.advertisement.edit',compact('advertisement'));
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
            'url' => 'required',
        ]);
        $advertisement=Advertisement::find($id);
        $advertisement->title=$request->title;
        $advertisement->slug=$slug = Str::slug($advertisement->title, '_');
        /*image upload*/
        if ($request->file('image')!='') {
//                die('here');
            $destination_path = 'uploads/advertisements';
            $name= time() . "-" . $request->file('image')->getClientOriginalName();
            $image = $destination_path . '/' .$name;

            $request->file('image')->move($destination_path, $image);
            $this->upload_image($image,$name);
            if(file_exists($destination_path.'/'.$advertisement->image)){
                unlink($destination_path.'/'.$advertisement->image);
                unlink('uploads/advertisements_resize/'.$advertisement->image);

            }

        }
        else{
            $name=$advertisement->image;
        }
        $advertisement->image=$name;
        $advertisement->url=$request->url;
        $advertisement->status=($request->status)?1:0;
        $result=$advertisement->save();
        if($result){
            session()->flash('message', 'Advertisement Updated Succefully.');
            return redirect('home/advertisement');
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
        Advertisement::find($id)->delete();
        session()->flash('message', 'Advertisement Deleted Successfully.');
        return redirect('home/advertisement');
    }
}
