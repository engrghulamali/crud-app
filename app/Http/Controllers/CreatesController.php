<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
//se Illuminate\Facedes\DB;
use Illuminate\Support\Facades\DB;

class CreatesController extends Controller
{
    //Read Function 
    public function home()
    {

            $articles = DB::table('articles')->paginate(2);
    	//$articles=Article::all();
    	      //dd($articles);
    	return view('home',compact('articles'));
    }
    //Read Function 
     public function index(Request $request)
    {
    	$this->validate($request,[
         'title' => 'required',
         'description' => 'required',
         'price' => 'required'
         //'file' => 'file|required'

    	]);
         //dd($request->img);
    	$Article = new Article;
       
        $Article->img=$request->img->store('images');
        $Article->title = $request->title;
        $Article->price = $request->price;
        $Article->description= $request->description;
        $Article->save();
        return redirect('/')->with('info','Article saved Successfully!');

    
    }
    //Read Function 
    public function destroy($id)
    {
   
    	Article::find($id)->delete();
    	return redirect('/')->with('info','Required data,  deleted....  Successfully!');
    }
    //Read Function 
     public function show($id)
    {
   
        $articles=Article::find($id);
        return view('read',compact('articles'));
    }

     //Edit Function 
     public function edit($id)
    {
   
        $articles=Article::find($id);
        return view('update',compact('articles'));
    }
     //Update Function 
    public function update(Request $request,$id)
     {
        $Article =Article::find($id);
        $Article->title = $request->etitle;
        $Article->description= $request->edescription;
        $Article->save();
        return redirect('/')->with('info','Required data,  Updated....  Successfully!');
     }

}