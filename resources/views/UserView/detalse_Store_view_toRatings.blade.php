@extends('layout.htmld_Layout')
@section('content')


<div style="text-align: center;">
	
<div>Ratingas Store  </div>

<div style=" display: inline-block;text-align: center;"> 
<img  src="{{$dataStore->image}}"  width="500" height="300">
</div>

<div style=" display: inline-block;">
	

	<br>
<div > 
name : {{$dataStore->name}}
</div>


<div> 
phone numper :  {{$dataStore->mobile}}
</div>


<div> 
addres  Story :  {{$dataStore->addres}}
</div>

<br>

<form  action="{{URL('ratings/addRatings')}}" method="post" >

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	 
<input type="hidden"   name="id" value="{{$dataStore->ID}}">


<input type="radio" id="1" name="fav_language" value="1">
<label for="1">1</label> 
<input type="radio" id="2" name="fav_language" value="2">
<label for="2">2</label> 
<input type="radio" id="3"  name="fav_language" value="3">
<label for="3">3</label>
<input type="radio" id="4"  name="fav_language" value="4">
<label for="4">4</label>
<input type="radio"  id="5" name="fav_language" value="5">
<label for="5">5</label>
<br>
	<br>


  <button type="submit" style="background-color:#ffc220" class="btn btn-primary">Ratings</button>

</form>

</div>


</div>

@stop

