<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institution;
use Illuminate\Support\Str;
use File;
use Image;
use App\Facility;
use App\Course;
use App\InstitutionHasFacility;
use App\InstitutionHasCourse;
class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return('harry');
        $institution_list=Institution::orderBy('id','DESC')->paginate(10);
        return view('backend.institution.table',compact('institution_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.institution.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
// var_dump($request->featured); die;
     $this->validate($request,[
        'title' => 'required',
        'logo'=>'required',
        'banner'=>'required',
        'latitude'=>'required',
        'longitude'=>'required',
        'information'=>'required',
        'short_intro'=>'required',
        'funding_type'=>'required',
        'institution_type'=>'required',
        'estd_year'=>'required',
        'student_no'=>'required',
        'address'=>'required',
        ]);
     $institution=new Institution();
     $institution->title=$request->title;
     $institution->slug=$slug = Str::slug($institution->title, '_');
     $institution->latitude=$request->latitude;
     $institution->longitude=$request->longitude;
     $institution->information=$request->information;
     $institution->short_intro=$request->short_intro;
     $institution->funding_type=$request->funding_type;
     $institution->institution_type=$request->institution_type;
     $institution->estd_year=$request->estd_year;
     $institution->student_no=$request->student_no;
     $institution->address=$request->address;
     $institution->schoolarship=($request->schoolarship)?1:0;
     $institution->featured=($request->featured)?$request->featured:0;
     $institution->status=($request->status)?1:0;
     /*Upload  logo and banner*/
        $destination_path = 'uploads/institution/logo/';
        $name= time() . "-" . $request->file('logo')->getClientOriginalName();
        $image = $destination_path . '/' .$name;
        $request->file('logo')->move($destination_path, $image);
        $this->upload_logo($image,$name);
    $institution->logo=$name;
        $destination_path = 'uploads/institution/banner/';
        $name= time() . "-" . $request->file('banner')->getClientOriginalName();
        $image = $destination_path . '/' .$name;
        $request->file('banner')->move($destination_path, $image);
        $this->upload_banner($image,$name);
    $institution->banner=$name;
     $result=$institution->save();
     if($result){
        session()->flash('message', 'Institution Saved Succefully.');
        return redirect('home/institution');
    }
    else{
        session()->flash('message', 'Something Went Wrong! Please Try Again.');
        return redirect()->back()->withInput();
    }

}
    public function upload_logo($image,$name) {
        $image = Image::make($image);
        $path = 'uploads/institution/logo_resize/';
        $image->resize(1920,700);
        // save resized
        $image->save($path.$name);
    }
    public function upload_banner($image,$name) {
        $image = Image::make($image);
        $path = 'uploads/institution/banner_resize/';
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
       $institution=Institution::find($id);
       return view('backend.institution.edit',compact('institution'));
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
        'latitude'=>'required',
        'longitude'=>'required',
        'information'=>'required',
        'short_intro'=>'required',
        'funding_type'=>'required',
        'institution_type'=>'required',
        'estd_year'=>'required',
        'student_no'=>'required',
        'address'=>'required',

            ]);
    $institution= Institution::find($id);
    $institution->title=$request->title;
     $institution->slug=$slug = Str::slug($institution->title, '_');
     $institution->latitude=$request->latitude;
     $institution->longitude=$request->longitude;
     $institution->information=$request->information;
     $institution->short_intro=$request->short_intro;
     $institution->funding_type=$request->funding_type;
     $institution->institution_type=$request->institution_type;
     $institution->estd_year=$request->estd_year;
     $institution->student_no=$request->student_no;
     $institution->address=$request->address;
     $institution->schoolarship=($request->schoolarship)?1:0;
     $institution->featured=($request->featured)?$request->featured:0;
     $institution->status=($request->status)?1:0;

     if ($request->file('logo')!='') {
//                die('here');
            $destination_path = 'uploads/institution/logo/';
            $name= time() . "-" . $request->file('logo')->getClientOriginalName();
            $image = $destination_path . '/' .$name;
            $request->file('logo')->move($destination_path, $image);
            $this->upload_logo($image,$name);
            if(file_exists($destination_path.'/'.$institution->logo)){
                unlink($destination_path.'/'.$institution->logo);
                unlink('uploads/institution/logo_resize/'.$institution->logo);

            }

        }
        else{
            $name=$institution->logo;
        }
        $institution->logo=$name;

        if ($request->file('banner')!='') {
//                die('here');
            $destination_path = 'uploads/institution/banner/';
            $name= time() . "-" . $request->file('banner')->getClientOriginalName();
            $image = $destination_path . '/' .$name;
            $request->file('banner')->move($destination_path, $image);
            $this->upload_banner($image,$name);
            if(file_exists($destination_path.'/'.$institution->banner)){
                unlink($destination_path.'/'.$institution->banner);
                unlink('uploads/institution/banner_resize/'.$institution->banner);

            }

        }
        else{
            $name=$institution->banner;
        }
        $institution->banner=$name;

        $result=$institution->save();
        if($result){
            session()->flash('message', 'Institution Updated Succefully.');
            return redirect('home/institution');
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

      Institution::find($id)->delete();
        session()->flash('message', 'Institution Deleted Successfully.');
        return redirect('home/institution');
    }

    public function addMore($id)
    {

        $facility_list=Facility::where('status','1')->get();
        $course_list=Course::where('status','1')->get();
        $recent_facility=InstitutionHasFacility::where('institution_id',$id)->pluck('facility_id')->toArray();
        $recent_course=InstitutionHasCourse::where('institution_id',$id)->pluck('course_id')->toArray();
        return view('backend.institution.more_create',compact('facility_list','course_list','recent_facility','recent_course'));
    }
    public function store_more(Request $request){
        $facility_delete=InstitutionHasFacility::where('institution_id',$request->institution_id)->delete();
        foreach ($request->facilities as $value) {
            $facility=new InstitutionHasFacility;
            $facility->institution_id=$request->institution_id;
            $facility->facility_id=$value;
            $result1=$facility->save();
        }
        $course_delete=InstitutionHasCourse::where('institution_id',$request->institution_id)->delete();
        foreach ($request->courses as $value) {
            $course=new InstitutionHasCourse;
            $course->institution_id=$request->institution_id;
            $course->course_id=$value;
            $result2=$course->save();
        }
        if($result1 && $result2){
        session()->flash('message', 'Course and Facility Saved Succefully.');
        return redirect('home/institution');
    }
    else{
        session()->flash('message', 'Something Went Wrong! Please Try Again.');
        return redirect()->back()->withInput();
    }
    }
}
