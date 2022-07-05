<?php

namespace App\Http\Controllers;
use App\Models\about;
use Illuminate\Http\Request;

class admincontroller extends Controller
{



    public function about(){

        return view('pages\aboutcreate');
    }
    public function aboutlist(){

        return view('pages\aboutlist');
    }
    public function blog(){

        return view('pages\blogcreate');
    }
    public function bloglist(){

        return view('pages\bloglist');
    }
    public function contact(){

        return view('pages\contact');
    }
    public function home(){

        return view('pages\homecreate');
    }
    public function homelist(){

        return view('pages\homelist');
    }
    public function project(){

        return view('pages\projectcreate');
    }
    public function projectlist(){

        return view('pages\projectlist');
    }
    public function resume(){

        return view('pages\resumecreate');
    }
    public function resumelist(){

        return view('pages\resumelist');
    }
    public function service(){

        return view('pages\servicescreate');
    }
    public function servicelist(){

        return view('pages\serviceslist');
    }
    public function skill(){

        return view('pages\skillcreate');
    }
    public function skilllist(){

        return view('pages\skilllist');
    }

    public function aboutstore(Request $request){

        $about= new about;
        $about->name=$request->input('name');
        $about->birth=$request->input('birth');
        $about->height=$request->input('height');
        $about->email=$request->input('email');
        $about->address=$request->input('address');
        $about->phone=$request->input('phone');
        $about->title=$request->input('title');
        $about->description=$request->input('description');
       
      
        
       
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = 'storage/about/'.$request->input('name').'.'.$extenstion;
            $file->move('storage/about/', $filename);
            $about->image = $filename;
        }
        
        if($request->hasfile('pdf'))
        {
            $file = $request->file('pdf');
            $extenstion = $file->getClientOriginalExtension();
            $filename = 'storage/about/'.$request->input('name').'.'.$extenstion;
            $file->move('storage/about/', $filename);
            $about->image = $filename;
        }
       $about->save();
       return redirect()->back()->with('status',' about data insert succefully');
    }

}
