<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ClientsReview;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\WorkLocation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::where('publish',1)->get();
        $setting = Setting::first();
        $projects = Project::where('published',1)->take(6)->get();
        $partners = Partner::take(6)->get();
        return view('frontend.index',compact('sliders','setting','projects','partners'));
    }

    public function projects(){
        $projects = Project::where('published',1)->paginate(6);
        return view('frontend.projects',compact('projects'));
    }
    public function project($id){
        $project = Project::findOrFail($id);

        // Get the previous item (where ID is less than current item ID)
        $previousItem = Project::where('id', '<', $project->id)
                            ->where('published',1)
                            ->orderBy('id', 'desc')
                            ->first();
    
        // Get the next item (where ID is greater than current item ID)
        $nextItem = Project::where('id', '>', $project->id)
                        ->where('published',1)
                        ->orderBy('id', 'asc')
                        ->first();

        return view('frontend.project',compact('project','previousItem','nextItem'));
    }

    
    public function partners(){
        $partners = Partner::all();
        return view('frontend.partners',compact('partners'));
    }
    public function certificates(){
        $setting = Setting::first();
        return view('frontend.certificates',compact('setting'));
    }

    public function about(){
        $setting = Setting::first();
        $client_reviews = ClientsReview::take(12)->get();
        return view('frontend.about',compact('setting','client_reviews'));
    }

    public function contactus(){
        $worklocations = WorkLocation::all();
        $setting = Setting::first();
        return view('frontend.contactus',compact('worklocations','setting'));
    }

    public function contactus_store(Request $request){
        $contact = Contact::create($request->all());
        return redirect()->back()->with('message','Your message has been sent successfully');
    }

    
    public function products($type){ 
        if(!in_array($type,array_keys(Product::TYPE_SELECT))){
            abort(404);
        }
        $products = Product::where('type',$type)->paginate(6);
        return view('frontend.products',compact('products'));
    }
    public function product($id){
        $product = Product::findOrFail($id); 

        return view('frontend.product',compact('product'));
    }

}
