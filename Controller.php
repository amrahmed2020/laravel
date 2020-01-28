<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Shop;
use App\App;
use App\Item;
use App\News;
use App\Social;
use App\User;
use App\Aboutable;
use App\Photo;
use App\post;
use App\page;
use App\Door;
//use App\name;
use App\data;
use App\Produc;
use App\Program;
use App\Programa;
use App\Slider;
use App\Message;
use App\About;
use App\Flight;
use Yajra\DataTables\DataTables;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    

////////////////////////
	  public function career()
    {
         $shop=shop::all();
         $post=post::all();
         $page=page::all();
		 $about=about::all();
         $app=app::all();
         $item=item::all();
         $Photo=Photo::all();
         $Program=Program::all();
        // $Slider=Slider::all();
			$name="careers";
    	return view('careers',compact('shop','name','about','app','item','Photo','Program','post','page'));  
     }
	 
////////////////////////
	  public function privileges()
    {
         $shop=shop::all();
         $post=post::all();
         $page=page::all();
		 $about=about::all();
         $app=app::all();
         $item=item::all();
         $Photo=Photo::all();
         $Program=Program::all();
        // $Slider=Slider::all();
			$name="privileges";
    	return view('privileges',compact('shop','name','about','app','item','Photo','Program','post','page'));  
     }
	 		 
////////////////////////
 public function contact()
    {
         $shop=shop::all();
         $post=post::all();
         $page=page::all();
		 $about=about::all();
         $app=app::all();
         $item=item::all();
         $Photo=Photo::all();
         $Program=Program::all();
        // $Slider=Slider::all();
			$name="contact";
    	return view('contact',compact('shop','name','about','app','item','Photo','Program','post','page'));  
     }
	 	 
////////////////////////
	  public function about()
    {
		$Aboutable=Aboutable::all();
         $shop=shop::all();
         $post=post::all();
         $page=page::all();
		 $about=about::all();
         $app=app::all();
         $item=item::all();
         $Photo=Photo::all();
         $Program=Program::all();
        // $Slider=Slider::all();
			$name="about";
    	return view('about',compact('shop','name','Aboutable','about','app','item','Photo','Program','post','page'));  
     }
	 	 
////////////////////////
	  public function project()
    {
     
       //  $social=social::all();
         $shop=shop::all();
         $post=post::all();
         $page=page::all();
		 $about=about::all();
         $app=app::all();
         $item=item::all();
         $Photo=Photo::all();
         $Program=Program::all();
        // $Slider=Slider::all();
			$name="index";
    	return view('project',compact('shop','name','about','app','item','Photo','Program','post','page'));
  
     }
	 
	 	 
////////////////////////
	  public function nada()
    {
     
       //  $social=social::all();
	   $slider=slider::all();
         $shop=shop::all();
         $post=post::all();
         $page=page::all();
		 $Aboutable=Aboutable::all();
         $app=app::all();
         $item=item::all();
         $Photo=Photo::all();
         $Program=Program::all();
         $about=about::all();
		 $Aboutablee = DB::table('aboutables')
		  	 ->where('id', '<=', 2)
     ->select('aboutables.*', 'aboutables.image')
	 ->get(); 
			$name="index";
    	return view('home',compact('about', 'slider', 'shop','name','Aboutablee','app','item','Photo','Program','post','page'));
   
         
        
     }
	 
//////////////////////// public function Partitions ///////////////////////////////////////////////////

	 		public function Partitions()
    {
				$name = "partitions";

//////////// part 
		$partition = DB::table('unites')
		  	 ->where('category', '=', 1)
     ->select('unites.id', 'unites.images')
	 ->get(); 
//////////// part 
		$glass = DB::table('unites')
		  	 ->where('category', '=', 2)
     ->select('unites.id', 'unites.images')
	 ->get(); 
//////////// part 
		$frameless = DB::table('unites')
		  	 ->where('category', '=', 3)
     ->select('unites.id', 'unites.images')
	 ->get(); 
//////////// part 
		$curtain = DB::table('unites')
		  	 ->where('category', '=', 4)
     ->select('unites.id', 'unites.images')
	 ->get(); 
//////////// part 
		$other = DB::table('unites')
		  	 ->where('category', '=', 4)
     ->select('unites.id', 'unites.images')
	 ->get(); 
		return view($name, compact('other','curtain','frameless','glass','partition'));
	}
//////////////////////// public function window ///////////////////////////////////////////////////
	
	public function window()
    {
		$name = "window";
////////////car tilt 
		$tilt = DB::table('images')
		  	 ->where('store', '=', 1)
     ->select('images.id', 'images.image')
	 ->get(); 
//////////// car system 
		$system = DB::table('images')
		  	 ->where('store', '=', 2)
     ->select('images.id', 'images.image')
	  ->get(); 
//////////// car slide 
		$slide = DB::table('images')
		  	 ->where('store', '=', 3)
     ->select('images.id', 'images.image')
	  ->get(); 
	  	 // car tslide 
		$tslide = DB::table('images')
		  	 ->where('store', '=', 4)
     ->select('images.id', 'images.image')
	 ->get(); 
	 	 // car folding 
		$folding = DB::table('images')
		  	 ->where('store', '=', 5)
     ->select('images.id', 'images.image')
	 ->get(); 
	 	 // car filter 
		$filter = DB::table('images')
		  	 ->where('store', '=', 6)
     ->select('images.id', 'images.image')
	 ->get(); 
	 	 // car panled 
		$panled = DB::table('images')
		  	 ->where('store', '=', 7)
     ->select('images.id', 'images.image')
	 ->get(); 
	 	 // car other 
		$other = DB::table('images')
		  	 ->where('store', '=', 8)
     ->select('images.id', 'images.image')
	 ->get(); 
	  
		return view($name,compact('other','panled','filter','folding','tslide','slide','system','tilt'));
	}
//////////////////////// public function Door ///////////////////////////////////////////////////
	public function Door()
    {
		$data = DB::table('images')
		  	 ->where('store', '=', 2)
     ->select('images.id', 'images.image')
	 ->get(); 
		return view('doors',compact('data'));
	}
//////////////////////// public function Door ///////////////////////////////////////////////////

	public function FlyScreen()
    {
		$data = DB::table('images')
		  	 ->where('store', '=', 3)
     ->select('images.id', 'images.image')
	 ->get(); 
		return view('FlyScreen',compact('data'));
	}
//////////////////////// public function Door ///////////////////////////////////////////////////

		public function GlassWorks()
    {
		$data = DB::table('images')
		  	 ->where('store', '=', 4)
     ->select('images.id', 'images.image')
	 ->get(); 
		return view('GlassWorks',compact('data'));
	}
//////////////////////// public function Door ///////////////////////////////////////////////////

		public function StanlesSteel()
    {
		$data = DB::table('images')
		  	 ->where('store', '=', 5)
     ->select('images.id', 'images.image')
	 ->get(); 
		return view('StanlesSteel',compact('data'));
	}
	
//////////////////////// public function ProfileSeries ///////////////////////////////////////////////////

	
			public function ProfileSeries()
    {
		$data = DB::table('images')
		  	 ->where('store', '=', 7)
     ->select('images.id', 'images.image')
	 ->get(); 
		return view('ProfileSeries',compact('data'));
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	

////////////////////////  public function  shops ///////////////////////////////////////////////////

	 public function shops()
    {
		  return DB::table('users')
    ->join('shops','users.id', '=','shops.id')
    ->select('users.*', 'shops.image')
	->get(); 
	}
	
	/*	
	$users = DB::table('users')
                    ->where('votes', '>', 100)
                    ->orWhere('name', 'John')
                    ->get();
					
					
		  $data = DB::table('cats')
  ->join('images','cats.relationship', '=','images.id')
    ->select('cats.relationship', 'images.image')
	->get(); 
	return view('index',compact('data'));
	
	 $data = DB::table('images')
		  	 ->where('store', '=', 5)
			  ->orWhere('row', '=', 55)
    ->select('images.id', 'images.image')
	*/
    public function cats()
    {
	 $data = DB::table('images')
		  	 ->where('store', '=', 5)
    ->select('images.id', 'images.image')
	->get(); 
	return view('index',compact('data'));
	}
	
	
     public function Program()
    {
	/*------Json Array-----/---->>>>*/	
	//return DB::table('users')->get();
   
   
   return DB::table('users')
    ->join('shops','users.id', '=','shops.id')
	->Join('programs','users.id', '=','programs.id')
    ->select('users.id', 'programs.name', 'shops.image')
	->get(); 
   // return view('index',compact('shop','name','about','app','item','Photo','Program'));

//View
      /* 
         $shop=shop::all();
		 $about=about::all();
         $app=app::all();
         $item=item::all();
         $Photo=Photo::all();
         $Program=Program::all();
        // $Slider=Slider::all();
       



echo "pre";
    print_r($Photo); 
    print_r($Program); 
    print_r($about); 

         exit();
      */     /*
         return Datatables::of($Program)
             ->addColumn ('action' , function($Program){
                 '<a onclick="showData('.$Program->id.')">show</a>'.' '.
                 '<a onclick="editForm('.$Program->id.')">Edit</a>'.' '.
                 '<a onclick="deleteData('.$Program->id.')">Delete</a>';

             })->make(true);*/
     }
    
      public function newone()
    {
         $shop=shop::all();
		 $about=about::all();
         $app=app::all();
         $item=item::all();
         $Photo=Photo::all();
         $Program=Program::all();
        // $Slider=Slider::all();
			$name="index";
    	return view('index',compact('shop','name','about','app','item','Photo','Program'));
    }

    
	
   

     public function messagea(Request $request)
    {
        $rules=[
            'name'=>'required|min:3',
            'email'=>'email|required',
            'message'=>'required|min:5',
        ];
        $this->validate(request(),$rules);
        $request=new Message;
        $request->name=request('name');
        $request->email=request('email');
        $request->message=request('message');
        $request->save();
        return back()->with('status','Message sent Successfuly!');
    }
    
}
