<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FooBar;

class FooBarController extends Controller
{
	public function index(){
		return view('foo-bar');
	}

	public function view($id){
		$fooBar = FooBar::find($id);
		return view('foo-bar.view')->with(['fooBar'=>$fooBar]);
	}

	public function createView(){
		return view('foo-bar.create');
	}

	public function updateView($id){

		$fooBar = FooBar::where('id', $id)->first();
		return view('foo-bar.update')->with(['fooBar'=>$fooBar->id]);
	}

    public function get(Request $request){

    	return response()->json(FooBar::all());
    }

    public function getById(Request $request, $id){

    	$fooBar = FooBar::where('id', $id)->first();
    	return response()->json($fooBar);
    }

    public function create(Request $request){
    	$fooBarName 		= $request->input('name');
    	
    	if($fooBarName){
    		$fooBar = new FooBar;
    		$fooBar->foo_bar_name = $fooBarName;
    		$status = $fooBar->save();
    		return response()->json(["status"=>$status]);
    	}else{
    		return response()->json(["status"=>false]);
    	}
    }

    public function update(Request $request){

    	$fooBar = $request->input('data');
    	$status = FooBar::where('id', $fooBar['id'])->update(['foo_bar_name' => $fooBar['foo_bar_name']]);

    	return response()->json(['status'=>$status]);
    }

    public function delete(Request $request, $id){
    	FooBar::where('id', $id)->delete();
    }

}
