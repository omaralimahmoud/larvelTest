<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Cat;
class CatController extends Controller
{
    //
    public function index()
    {
            $cats=Cat::paginate(3);
          //  dd($cats);
          return view('cats/index',[
              'cats'=>$cats
          ]);
    }
    public function show($id)
    {
      $cat=  Cat::findOrFail($id);
        return view("cats.show",[
            'Cat'=>$cat
        ]);
    }

   public function create()
   {
       return view('cats.create');
   }
    public function store(Request $request)
    {
       // dd($request->desc);
       $imgpath= Storage::putFile("cats",$request->img);
       $request->validate([
        'name'=>'required|string|max:50',
        'desc'=>'required|string',
        'img'=>'required|image|max:1024|mimes:jpg,png'
      ]);
     // dd($request->all());
       Cat::create([
           'name'=>$request->name,
           'desc'=>$request->desc,
           'img'=>$imgpath

       ]);
      return redirect(url('/cats'));
    }
      public function edit($id)
      {
          $cat= Cat::findOrFail($id);
        return view('cats.edit',[
         'cat'=>$cat
        ]);
      }
       public function update($id,Request $request)
       {
        $request->validate([
            'name'=>'required|string|max:50',
            'desc'=>'required|string',
          ]);
         Cat::findOrfail($id)->update([
             'name'=>$request->name,
             'desc'=>$request->desc,
         ]);
         return redirect(url('/cats'));
       }
   public function delete($id)
   {
      Cat::findOrFail($id)->delete();
        return redirect(url('/cats'));
   }

   public function latest($num)
   {
     $cats= Cat::orderBy('id','Desc')->take($num)->get();
     return view('cats.latest',[
       'num'=>$num,
        'cats'=>$cats,
     ]);
   }
    public function search(Request $request)
    {
       $keyword=$request->keyword;
       $cats= Cat::where('name','like',"%$keyword%")->get();
       return view('cats.search',[
           'cats'=>$cats,
           'keyword'=>$keyword,
       ]);
    }
}
