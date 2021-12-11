@extends('layout.htmld_Layout')
@section('content')


 <style>
body {background-color: powderblue;}
/* Style buttons */
.btn {
  background-color: DodgerBlue; /* Blue background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>



<div>
<h1 style="color:blue;text-align:center;">categorys</h1>
	 
</div>



<div style="text-align:right; ">
	
<a class="btn btn-primary" style="background-color:green;marker: 10px;" href="{{URL('categuty/create/View')}}"><i class="fa fa-close"></i></a>
</div>





<br>

<!-- <img  style="width:100px;height:200px" src="file:\\\C:\Users\HP15\Desktop\FinalLaravel/storage/app/images/1638521947.png" >
 -->

@foreach($categorys as $category)


<div style="text-align: center;">
	


<br>

<img width="200" height="100" src="{{$category->image}}">


<div style="width:100;height: 150;">
<div>
name categorys:->  {{$category->name}}   
</div>



<a style="color: yellow" href="{{URL('update').'/'.$category->ID}}"> <i class="fa fa-folder"></i> update</a>


<a style="color: red" href="{{URL('categuty/delete').'/'.$category->ID}}"> <i class="fa fa-trash"></i> deleet</a>

 
<br>	


  </div>	

</div>


@endforeach

  



@stop
