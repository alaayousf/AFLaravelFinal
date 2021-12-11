@extends('layout.htmld_Layout')
@section('content')

 <div style="color:#ffc220;text-align: center;" >Ratings</div>


<form action="{{URL('serch')}}" method="post">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">

    <label for="exampleInputEmail1">Serch</label>

    <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="setch store">
    
  </div>

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>





<br>
@foreach($data as $store)

 <div >

<div style="text-align: center;" >

   
  <img width="150px" height="200px" src="{{$store->image}}">
 

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

<div style="text-align: center;">
     <a style="background-color: #ffc220" class="btn btn-primary" href="{{URL('ratings/Detalse').'/'.$store->ID}}">Add ratings  Rateings</a>
</div>

</div>

<br>


@endforeach



@stop