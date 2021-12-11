@extends('layout.htmld_Layout')
@section('content')


<div style="text-align: center;">
<h1 style="color:green;">new categorys </h1>
</div>

<div style="text-align: center;">
  
<div style="margin: 20px">
  <form enctype="multipart/form-data" action="{{URL('categuty/creat')}}" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  <div >
    <div >
      <input type="text" class="form-control" name="categuryname" placeholder="categury name">
    </div>
    <br>
    <div>
       <input class="btn btn-primary" style="background-color:green" type="file" id="myFile" name="filename">
    </div>
  </div>

  <br>

  <button type="submit" class="btn btn-primary">create</button>

</form>

</div>

</div>

@stop
  