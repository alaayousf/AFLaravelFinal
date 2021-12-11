<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Support\Facades\Storage;
use App\Rating;
use App\Store;
use App\Category;





class Stores extends Controller
{




public function creat(Request $request)
{

  $name=$request['store_name'];
  $phone=$request['phone'];
  $images=$request['filename'];

  $address=$request['address'];
  $id_catgury=$request['id_catgury'];


    $path= 'images/';
   $nameImge=time()+rand(1,1000) . "." . $images->getClientOriginalExtension();

   Storage::put($path.$nameImge,file_get_contents($images));


    $img=$path.$nameImge;

  $res = DB::table('stores')->insertGetId(array('name' => $name,'mobile' => $phone,'image' => $img,'addres' =>  $address ,'ID_categorys' => $id_catgury));



    // $insertGuery="INSERT INTO ratings(ID,person,rate)
    //   VALUES ('$res','system',5);";

    //  DB::INSERT($insertGuery);

     $newRatings=new Rating();
     $newRatings->ID=$res;
     $newRatings->person='system';
     $newRatings->rate=5;
     $newRatings->save();
     return redirect('store/View');


}




public function delete($id_deleet){
  
// $query="DELETE FROM stores WHERE ID=$id_deleet";

//       DB::DELETE($query);


      Store::where('ID',$id_deleet)->delete();
      return back(); 

}




public function update_view($id)
{

           
 
      $result=Category::select('ID','name','image')->get();




      foreach ($result as$results) {
        $image_linke =Storage::url($results->image);
        $results->image= $image_linke;

      }

 return view('StoreView.store_update_view')->with('id',$id)->with('categorys',$result);

}




  public function cerate_view()
    {


      $result=Category::select('ID','name','image')->get();





      foreach ($result as$results) {
        $image_linke =Storage::url($results->image);
        $results->image= $image_linke;

      }

           return view('StoreView.Create_Store_View')->with('categorys',$result);
    }












public function update(Request $request)
{
	
	$id_update=$request['id_update'];
	$name=$request['store_name'];
	$phone=$request['phone'];
	$images=$request['filename'];
	$address=$request['address'];
	$id_catgury=$request['id_catgury'];


	  $path= 'images/';
    $nameImge=time()+rand(1,1000) . "." . $images->getClientOriginalExtension();
    Storage::put($path.$nameImge,file_get_contents($images));
    $te=$path.$nameImge;

 

    $updateModel=Store::where('ID',$id_update)->first();
    $updateModel->name=$name;
    $updateModel->mobile=$phone;
    $updateModel->image=$images;
    $updateModel->addres=$address;
    $updateModel->ID_categorys=$id_catgury;
    $updateModel->save();







     return redirect('store/View');

}






    public function store_view()
    {


      $query="SELECT S.ID, S.name,S.mobile,S.image,S.addres,C.name AS nameCA
              FROM categorys as C, stores as S
              WHERE C.ID = S.ID_categorys";
      $result=DB::select($query);
  

    foreach ($result as$results) {
        $image_linke =Storage::url($results->image);
        $results->image= $image_linke;

      }

      //dd($result);


         return view('StoreView.Store_view')->with('stores',$result);
    }





}

