<?php

use App\Http\Controllers\CatController;
use Illuminate\Support\Facades\Route;
//use App\Models\Cat;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cats',[CatController::class,'index']);
Route::get('/cats/show/{id}',[CatController::class,'show']);
Route::get('/cats/create',[CatController::class,'create']);
Route::post('/cats/store',[CatController::class,'store']);
Route::get('/cats/edit/{id}',[CatController::class,'edit']);
Route::post('/cats/update/{id}',[CatController::class,'update']);
Route::get('/cats/delete/{id}',[CatController::class,'delete']);
Route::get('/cats/latest/{num}',[CatController::class,'latest']);
Route::get('/cats/search',[CatController::class,'search']);
/*Route::get('/test',function(){
 // SELECT * FROM CATS WHERE ID >3
 // $cats= Cat::where('id','>=','3')->get();
  ///  SELECT* FROM CATS WHERE ID >=3 AND NAME <> GO
  //$cats= Cat::where('id','>=',3)->where('name','<>','Go')->get();

 // SELECT* FROM CATS WHERE ID >=3 OR name = 'GO'
   $cats=Cat::where('id','>=',3)->orWhere('name','=','ham')->get();
   foreach ($cats as  $cat) {
       echo "$cat->id-$cat->name <br>";
   }


});
*/

