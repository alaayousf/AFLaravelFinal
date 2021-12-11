@extends('layout.htmld_Layout')
@section('content')



<form style="margin: 30px" action="{{URL('Login/Aute')}}" method="get">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="emaile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
<br>
    <label for="exampleInputEmail1">Email Password</label>

    <input type="name" class="form-control" name="passorde" placeholder="Enter email"> 

  </div>

 <!--  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="numper" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 -->
 <br>
  <button type="submit" style="background-color: #041f41" class="btn btn-primary">Submit</button>
</form>

<div>
   
  <a style="margin: 30px"   href="{{URL('Login/asGuest')}}">Log in as a gest Guest</a>

</div>

@stop