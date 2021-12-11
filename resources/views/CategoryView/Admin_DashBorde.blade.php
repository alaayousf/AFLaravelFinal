@extends('layout.htmld_Layout')
@section('content')

<h1 style="text-align: center;color: #f231f2">Admin Dash Borde</h1>

<br>
<div style="text-align: center;">
 

 
<div class="container px-4">
  <div class="row gx-5">
    <div style="background-color: blue; border-radius: 25px;height: 150px" class="col">
  <a style="color:white"  href="{{URL('categuty/index')}}">categuty</a>

    </div>
    <div class="col">
     


    <div style="background-color: #800080; border-radius: 25px;height: 150px" class="col">
 <a   style="color: white ;width: 150p" href="{{URL('store/View')}}">stors</a>

    </div>
    </div>
  </div>
</div>
 

 
 

</div>

<br>
<h3 style="text-align: center;color: #f231f2">Storse and Ratings</h1>


@foreach($data as $store)

<div style="text-align: center;border-radius:10px;">


  <div>
  <img width="150px"
  height="190px" src="{{$store->image}}">
  </div>
 

    <div>
   name Store : {{$store->name}}
  </div>
  


    <div>
  Avareg Ratings : {{$store->avareg}}
  </div>

    <div>
  nmber of Ratings : {{$store->countrateing}}
  </div>

</div>
  
<br>

@endforeach



@stop
