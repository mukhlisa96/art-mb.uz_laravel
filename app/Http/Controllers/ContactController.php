<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Banner;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts(){
    	$banner = Banner::all();
    	$contacts = Contact::all();
    	$contacts->load('translations');
    	return view('contacts')->withcontacts($contacts)->withbanner($banner);
    }
}
