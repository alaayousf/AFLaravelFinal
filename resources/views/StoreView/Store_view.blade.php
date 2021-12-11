@extends('layout.htmld_Layout')
@section('content')

<h1 style="text-align:center;color:800080 ">Dashborde Store</h1>



 
<div style="text-align: right;">
<a class="btn btn-primary" style="background-color:green;margin-right:10px" href="{{URL('store/create/View')}}"><i class="fa fa-close"></i></a>
</div>




@foreach($stores as $store)
<br>
 
  

	
 
<div style="color:#800080;text-align: center;">
 
<img  width="150px" height="200px" src="{{$store->image}} ">

 <div >
name Store: {{$store->name}}   
</div>

 


<div >
mobile numper:	{{$store->mobile}} 
	
</div>

 

 <div >
categury:	{{$store->nameCA}} 
	
</div>

 <div >
addres:	{{$store->addres}} 
	
</div>


<!-- update Store -->

<div>
 

 <a style="color: yellow" href="{{URL('store/update/View').'/'.$store->ID}}">update</a>

</div>


<div>
	
 <a style="color: red" href="{{URL('store/delete').'/'.$store->ID}}">DELEET</a>

</div> 
 
</div>




@endforeach




@stop
