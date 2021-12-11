<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{

	public function Guest_view()
	{


		$query="SELECT S.ID , S.image, S.name as name, AVG(R.rate) as avareg ,COUNT(R.ID) countrateing FROM stores as S , ratings as R WHERE R.ID=S.ID GROUP BY S.ID";
         $result=DB::select($query);



	     // foreach ($result as$results) {
		    //     $image_linke =Storage::url($results->image);
		    //     $results->image= $image_linke;

		    //   }


		return view('UserView.Guest_view')->with('data',$result);;

	}


public function getStoreData($id)
{

$query="SELECT * FROM `stores` as S WHERE S.ID=$id LIMIT 1";
 $result=DB::select($query);


 



 $data=$result[0];

//   $image_linke =Storage::url($data->image);
// 		        $data->image= $image_linke;	


 

return view('UserView.detalse_Store_view_toRatings')->with('dataStore',$data);
}



public function addRatings(Request $request)
{

 $id = $request['id'];
  

 $stares=$request['fav_language'];

$ipAddr=\Request::ip();

$query = "SELECT *
FROM `ratings` as R
WHERE R.ID ='$id' and R.person='$ipAddr'" ;

	 $result=DB::select($query);

	if (count($result) > 0){
	
	     dd("You have already rated the store");

     }else{

		$insertGuery="INSERT INTO ratings(ID,person,rate)
	    VALUES ('$id','$ipAddr','$stares');";

	     $resutlinsert=DB::INSERT($insertGuery);

 return redirect('Login/asGuest');

}
 //dd($id);


}



	public function Serch_Store(Request $request)
	{

       $serch = $request['serch'];

		$query="SELECT S.ID , S.image, S.name as name, AVG(R.rate) as avareg ,COUNT(R.ID) countrateing FROM stores as S , ratings as R WHERE R.ID=S.ID or  S.name LIKE '$serch%' GROUP BY S.ID";
         $result=DB::select($query);



	     // foreach ($result as$results) {
		    //     $image_linke =Storage::url($results->image);
		    //     $results->image= $image_linke;

		    //   }


		return view('UserView.Guest_view')->with('data',$result);;

	}






    
}
