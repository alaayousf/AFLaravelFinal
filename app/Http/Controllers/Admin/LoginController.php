<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

use Illuminate\Support\Facades\Storage;



class LoginController extends Controller{



    public function LoginView(){
           return view('Admain_View.LoginAdmin');
    }



    public function Aute(Request $request){
    	  


    	   $em=$request['emaile'];
           $ps=$request['passorde'];

           $logQury="SELECT * FROM `admin`
           WHERE emaile='$em' and passorde ='$ps'";

           $AuteLoig=DB::select($logQury);

           if (count($AuteLoig) > 0) {
             $query="SELECT S.image, S.name as name, AVG(R.rate) as avareg ,COUNT(R.ID) countrateing
           FROM stores as S , ratings as R WHERE R.ID=S.ID GROUP BY S.ID";
           $result=DB::select($query);



            foreach ($result as$results) {
                    $image_linke =Storage::url($results->image);
                    $results->image= $image_linke;

                  }

     
             return view('CategoryView.Admin_DashBorde')->with('data',$result);

            
           }else{
              
              return back();

           }


          
			
    }




}
