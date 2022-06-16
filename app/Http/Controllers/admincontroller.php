<?php

namespace App\Http\Controllers;
use App\Models\about;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function aboutinsert(){

        return view('pages\aboutcreate');
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
