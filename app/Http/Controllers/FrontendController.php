<?php

namespace App\Http\Controllers;

use App\Models\Call_to_action;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Showcase;
use App\Models\StoryContent;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //main page
    public function index(){
        // getting showcase data
        $showcase=Showcase::first();
        // getting services data
        $services=Service::all();
        // getting cta data
        $cta=Call_to_action::first();
        // getting pricing data
        $pricing=Pricing::all();
        // getting story data
        $story=StoryContent::all();
        return view('welcome',compact('showcase','cta','services','pricing','story'));
    }
}
