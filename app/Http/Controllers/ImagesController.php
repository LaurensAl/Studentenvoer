<?php
//
//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//
//class ImagesController extends Controller
//{
//    public function store(ImageFormRequest $request)
//    {
//
//        if ($request->hasFile('image')) {
//
//            $file = $request->file('image');
//
//            $name = $file->getClientOriginalName();
//
//            $file->save();
//            $file->save( public_path('/uploads/' . $name) );
//
//            return redirect('/')->with('status', 'Your image has been uploaded successfully!');
//        }
//    }
//
//}