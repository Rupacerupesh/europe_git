<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Form;
Use App\Application;
Use App\Testimonial;
use Validatior;
class FrontController extends Controller
{
    public function index(){
       $testimonial=Testimonial::all();
        return view('frontend.index',compact('testimonial'));
    }
    public function applyNow(){
    	// die('here');
    	return view('frontend.applyNow');
    }
    public function storeApplication(Request $request){
        $this->validate($request, [
            'full_name' => 'required',
            'address' => 'required',
            'country_id'=>'required',
            'email' => 'required|email|unique:applications',
            'contact_no' => 'required|numeric',
            'education_level_id' => 'required',
            'faculty' => 'required',
            'intrested_course_id' => 'required',
            'intrested_country_id' => 'required',
            'married_status' => 'required',
        ]);

//        $input = $request->all();
//        $result=Application::create($input);
        $application=new Application();
        $application->full_name=$request->full_name;
        $application->address=$request->address;
        $application->country_id=$request->country_id;
        $application->email=$request->email;
        $application->contact_no=$request->contact_no;
        $application->education_level_id=$request->education_level_id;
        $application->faculty=$request->faculty;
        $application->intrested_course_id=$request->intrested_course_id;
        $application->intrested_country_id=$request->intrested_country_id;
        $application->married_status=$request->married_status;
        $application->ielts=$request->ielts==''?null:$request->ielts;
        $application->tofel=$request->tofel==''?null:$request->tofel;
        $application->sat=$request->sat==''?null:$request->sat;
        $application->gre=$request->gre==''?null:$request->gre;
        $application->other_test=$request->other_test==''?null:$request->other_test;
        $application->work_experience=$request->work_experience==''?null:$request->work_experience;
        $result=$application->save();
        if($result){
            session()->flash('message', 'Application Submitted Succefully.');
            return redirect('apply');
        }
        else{
            session()->flash('message', 'Something Went Wrong! Please Try Again.');
            return redirect()->back()->withInput();
        }
    }
}
