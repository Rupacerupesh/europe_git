<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navigation;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $navigation_list=Navigation::all();
       return view('backend.navigation.table',compact('navigation_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents_list=['No Parents'];
        $parents_list=array_merge($parents_list,Navigation::pluck('title','id')->toArray());
//        $parents_list
//        return ($parents_list);
        return view('backend.navigation.create',compact('parents_list'));
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
            'title' => 'required|unique:navigations',
            'url' => 'required',
        ]);
        $navigation=new Navigation();
        $navigation->title=$request->title;
        $navigation->parent_id=$request->parent_id;
        $navigation->url=$request->url;
        $navigation->status=($request->status)?1:0;
            $result=$navigation->save();
        if($result){
            session()->flash('message', 'Navigation Saved Succefully.');
            return redirect('home/navigation');
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
        $parents_list=['No Parents'];
        $parents_list=array_merge($parents_list,Navigation::where('id','!=',$id)->pluck('title','id')->toArray());
        $navigation=Navigation::find($id);
        return view('backend.navigation.edit',compact('parents_list','navigation'));
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
        $navigation=Navigation::find($id);
        $navigation->title=$request->title;
        $navigation->parent_id=$request->parent_id;
        $navigation->url=$request->url;
        $navigation->status=($request->status)?1:0;
        $result=$navigation->save();
        if($result){
            session()->flash('message', 'Navigation Updated Succefully.');
            return redirect('home/navigation');
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
        Navigation::find($id)->delete();
        session()->flash('message', 'Navigation Deleted Successfully.');
        return redirect('home/navigation');
    }
}
