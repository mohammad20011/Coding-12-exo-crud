<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show(){
        $abouts=About::all();
        return view('templates.about', compact('abouts'));
    }
    public function destroy($id){
       Album::find($id)->delete();
    
       return redirect()->back();
    }
    public function edit($id){
        $about = About::find($id);

        return view('edit.aboutedit', compact('about'));
     }
     public function store($id){
        $about = About::find($id);

        $about->about_name = request('about_name');
        $about->description = request('description');

        $about->save();

        return redirect()->route('abouts');


     }

     public function create(){
         return view('create.aboutcreate');
     }
     
     public function save(){
         $about = new About();

         $about->about_name = request('about_name');
         $about->description = request('description');
         $about->img_path = request('img_path');
         $about->description2 = request('description2');

         $about->save();

         return redirect()->route('abouts');

     }
}
