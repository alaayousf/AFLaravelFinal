<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Category;


use Illuminate\Support\Facades\Storage;

class Categorys extends Controller
{


 

   public function category_creat_View(){

    return view('CategoryView.Categury_creat_view');
    
    }


 public function category_update_View($data)
 {

    return view('CategoryView.Categury_update_view')->with('id',$data);
 }





   public function creat(Request $request)
   {

   $names=$request['categuryname'];
   $images=$request->file('filename');

   $path= 'images/';

   
   $name=time()+rand(1,1000) . "." . $images->getClientOriginalExtension();
   Storage::put($path.$name,file_get_contents($images));


    $te=$path.$name;

   // $te='https://i.pinimg.com/736x/98/83/cd/9883cd1dcb9ce6a9d52ecd3512a52256.jpg';


     $newCategury=new Category();
     $newCategury->name=$names;
     $newCategury->image=$te;
     $newCategury->save();

    return redirect('categuty/index');
   }






   public function index()
   {

      // $query ="SELECT * FROM `categorys` WHERE 1";
      // $result=DB::select($query);

      $result=Category::select()->get();



      foreach ($result as$results) {
        $image_linke =Storage::url($results->image);
        $results->image= $image_linke;

      }

 
      return view('CategoryView.categuty_View')->with('categorys',$result);


   }

public function update(Request $request)
{
  
   $names=$request['categuryname'];
   $id=$request['id'];
   $images=$request->file('filename');

   $path= 'images/';
   $name=time()+rand(1,1000) . "." . $images->getClientOriginalExtension();

   Storage::put($path.$name,file_get_contents($images));


    $te=$path.$name;

   // $te='https://i.pinimg.com/736x/98/83/cd/9883cd1dcb9ce6a9d52ecd3512a52256.jpg';



      $upCateguty=Category::where('ID',$id)->first();
      $upCateguty->name=$names;
      $upCateguty->image=$te;
      $upCateguty->save();
      


    return redirect('categuty/index');

}


public function delete($id)
{


      Category::where('ID',$id)->delete();

      return back();
}


}
