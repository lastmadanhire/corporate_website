<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Call_to_action;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Showcase;
use App\Models\StoryContent;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //dashboard
    public function dashboard(){
        return view('backend.body.dashboard');
    }
    // showcase
    public function showcase(){
        $showcase = Showcase::first();

        return view('backend.body.showcase',compact('showcase'));
    }
    // store showcase
    public function update_showcase(Request $request){
        $data=Showcase::find($request->id);
        $data->title=$request->title;
        $data->description=$request->description;
        if ($request->file('image')) {
            $file=$request->file('image');
            @unlink(public_path('frontend/assets/img/'.$data->image));
            $filename=hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('frontend/assets/img'),$filename);
            $filename='frontend/assets/img/'.$filename;
            $data->image=$filename;
        }
        $data->save();
        $notification=array(
            'message' =>'Content updated successfully',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);

    }
     // story
     public function story(){
        $story = StoryContent::first();

        return view('backend.body.story',compact('story'));
    }
    // store showcase
    public function update_story(Request $request){
        $data=StoryContent::find($request->id);
        $data->title=$request->title;
        $data->subtitle=$request->subtitle;
        $data->who_we_are=$request->who_we_are;
        $data->our_vision=$request->our_vision;
        $data->our_history=$request->our_history;
        if ($request->file('image')) {
            $file=$request->file('image');
            @unlink(public_path('frontend/assets/img/'.$data->image));
            $filename=hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('frontend/assets/img'),$filename);
            $filename='frontend/assets/img/'.$filename;
            $data->image=$filename;
        }
        $data->save();
        $notification=array(
            'message' =>'Content updated successfully',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);
    }
    //call to ation page
    public function cta(){
        $cta = Call_to_action::first();
        return view('backend.body.cta',compact('cta'));
    }
    // store showcase
    public function update_cta(Request $request){
        $data=Call_to_action::find($request->id);
        $data->title=$request->title;
        $data->description=$request->description;
        if ($request->file('image')) {
            $file=$request->file('image');
            @unlink(public_path('frontend/assets/img/'.$data->image));
            $filename=hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('frontend/assets/img'),$filename);
            $filename='frontend/assets/img/'.$filename;
            $data->image=$filename;
        }
        $data->save();
        $notification=array(
            'message' =>'Content updated successfully',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);
    }
    //list services
    public function list_services(){
        $services = Service::all();
        return view('backend.body.services',compact('services'));
    }
    public function add_services(){
        return view('backend.body.add_services');
    }
    public function store_services(Request $request){
        Service::insert([
            'title'=>$request->title,
            'description'=>$request->description,
            'icon'=>$request->icon,
            'slug'=>strtolower(str_replace('-', '', $request->title))

        ]);
        $notification=array(
            'message'=>'Content updated successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('backend.list.service')->with($notification);

    }
    // update services
    public function update_services(Request $request){
        $data=Service::find($request->serviceId);
        $data->title=$request->title;
        $data->icon=$request->icon;
        $data->description=$request->description;
        $data->slug=strtolower(str_replace('-', '', $request->title));
        $data->save();
        $notification=array(
            'message' =>'Content updated successfully',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);
    }
    // edit services
    public function edit_services($serviceId){
        $service=Service::find($serviceId);
        if (!$service) {
            $notification=array(
                'message'=>'Service not found',
                'alert-type'=>'error',
            );
            return redirect()->back()->with($notification);
        }
        return view('backend.body.edit_services',compact('service'));
    }
    // delete services
    public function delete_services($serviceId){
        $service = Service::find($serviceId);
        if (!$service) {
            $notification=array(
                'message'=>'Service not found',
                'alert-type'=>'error',
            );
            return redirect()->route('backend.list.service')->with($notification);
        }
        $service->delete();
        $notification=array(
            'message'=>'Content deleted successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('backend.list.service')->with($notification);

    }

        //list pricing
        public function list_pricing(){
            $pricing = Pricing::all();
            return view('backend.body.pricing',compact('pricing'));
        }
        // add pricing
        public function add_pricing(){
            return view('backend.body.add_pricing');
        }
        // store pricing
        public function store_pricing(Request $request){
            Pricing::insert([
                'title'=>$request->title,
                'description'=>$request->description,
                'price'=>$request->price,

            ]);
            $notification=array(
                'message'=>'Content updated successfully',
                'alert-type'=>'success'
            );
            return redirect()->route('backend.list.pricing')->with($notification);

        }
        // update pricing
        public function update_pricing(Request $request){
            $data=Pricing::find($request->pricingId);
            $data->title=$request->title;
            $data->description=$request->description;
            $data->price=$request->price;
            $data->save();
            $notification=array(
                'message' =>'Content updated successfully',
                'alert-type' =>'success'
            );
            return redirect()->back()->with($notification);
        }
        // edit pricing
        public function edit_pricing($pricingId){
            $pricing=Pricing::find($pricingId);
            if (!$pricing) {
                $notification=array(
                    'message'=>'Pricing not found',
                    'alert-type'=>'error',
                );
                return redirect()->back()->with($notification);
            }
            return view('backend.body.edit_pricing',compact('pricing'));
        }
        // delete pricing
        public function delete_pricing($pricingId){
            $pricing = Service::find($pricingId);
            if (!$pricing) {
                $notification=array(
                    'message'=>'Pricing not found',
                    'alert-type'=>'error',
                );
                return redirect()->route('backend.list.pricing')->with($notification);
            }
            $pricing->delete();
            $notification=array(
                'message'=>'Content deleted successfully',
                'alert-type'=>'success'
            );
            return redirect()->route('backend.list.pricing')->with($notification);

        }

}
