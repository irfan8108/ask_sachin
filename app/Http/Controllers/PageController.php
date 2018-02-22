<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper;

class PageController extends Controller
{

	public function Index(Request $request){
		if($request->isMethod('get')){
			#Helper::test();
    		return view('page.construction');
    	}
	}

    public function Welcome(Request $request){
    	if($request->isMethod('get')){
    		return view('front.welcome');
    	}
    }

    public function voice(Request $request){
    	if($request->isMethod('get')){
    		return view('front.voice');
    	}
    }

    public function mission(Request $request){
    	if($request->isMethod('get')){
    		return view('front.mission');
    	}
    }

    public function story(Request $request){
    	if($request->isMethod('get')){
    		return view('front.story');
    	}
    }

    public function delhi(Request $request){
    	if($request->isMethod('get')){
    		return view('front.delhi');
    	}
    }

    public function updates(Request $request){
    	if($request->isMethod('get')){
    		return view('front.updates');
    	}
    }

    public function Join(Request $request){
    	if($request->isMethod('get')){
    		return view('front.join');
    	}
    }

    public function Admin(Request $request){
    	if($request->isMethod('get')){
    		return view('page.home');
    	}
    }

}
