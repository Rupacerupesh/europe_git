<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use Illuminate\Support\Str;
use File;


class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $country=Country::orderBy('id','DESC')->paginate(10);
       return view('backend.country.table',compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.country.create');
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
        $country=new Country();
        $country->title=$request->title;
        $country->slug=$slug = Str::slug($country->title, '_');
  
        $country->status=($request->status)?1:0;
            $result=$country->save();
        if($result){
            session()->flash('message', 'country Saved Succefully.');
            return redirect('home/country');
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

        $country=Country::find($id);
        return view('backend.country.edit',compact('country'));
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
        $country=Country::find($id);
        $country->title=$request->title;
        $country->slug=$slug = Str::slug($country->title, '_');
      
        $country->status=($request->status)?1:0;
        $result=$country->save();
        if($result){
            session()->flash('message', 'country Updated Succefully.');
            return redirect('home/country');
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
        Country::find($id)->delete();
        session()->flash('message', 'country Deleted Successfully.');
        return redirect('home/country');
    }
}
