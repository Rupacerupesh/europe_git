<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Form;
use App\Application;
use App\Testimonial;
use App\Advertisement;
use App\Banner;
use App\Navigation;
use App\Institution;

use Validatior;
class FrontController extends Controller
{
    public function index(){
        $navigation_parent=Navigation::where('parent_id','0')->get();
       $navigation_children=Navigation::where('parent_id','!=','0')->get();
        $banner=Banner::where('status',1)->orderBy('id','DESC')->get();
       $advertisement=Advertisement::where('status',1)->orderBy('id','DESC')->get();
       $testimonial=Testimonial::where('status',1)->orderBy('id','DESC')->get();
       $institution_front=Institution::where('status',1)->where('featured','!=','0')->orderBy('id','DESC')->get();
        return view('frontend.index',compact('testimonial','advertisement','banner','navigation_parent','navigation_children','institution_front'));
    }
    public function applyNow(){
         $navigation_parent=Navigation::where('parent_id','0')->get();
       $navigation_children=Navigation::where('parent_id','!=','0')->get();
    	// die('here');
    	return view('frontend.applyNow',compact('navigation_parent','navigation_children'));
    }
        public function contact_us(){
         $navigation_parent=Navigation::where('parent_id','0')->get();
       $navigation_children=Navigation::where('parent_id','!=','0')->get();
        // die('here');
        return view('frontend.contact_us',compact('navigation_parent','navigation_children'));
    }
    public function institution(){
         $navigation_parent=Navigation::where('parent_id','0')->get();
       $navigation_children=Navigation::where('parent_id','!=','0')->get();
        // die('here');
        return view('frontend.institution',compact('navigation_parent','navigation_children'));
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
