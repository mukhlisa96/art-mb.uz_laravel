<?php

namespace App\Http\Controllers;
use App\Career;
use App\Banner;
use App\Text;
use App\Applicant;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function showcareers(){

		$bs = Banner::all();
		$ts = Text::all();

    	$cs = Career::all();
    	$cs -> load('translations');
    	return view('careers')->withcs($cs)->withbs($bs)->withts($ts);
    }	


    public function store(Request $request){
    	$apl = new Applicant();
    	$apl->name = $request->input('name');
    	$apl->position = $request->input('position');
    	$apl->phone = $request->input('phone');
    	$apl->message = $request->input('mes');
    	$p = $request->file->store('store/applicants');
    	$apl->resume = $p;

    	$apl->save();

    	return redirect('careers')->with('success', 'Application sent');
    }	
}
