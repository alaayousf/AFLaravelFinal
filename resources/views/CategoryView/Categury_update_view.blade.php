@extends('layout.htmld_Layout')
@section('content')

 


<div style="text-align: center;">
<h1 style="color:green;color: yellow">update category </h1>
</div>



<div style="margin: 20px;text-align: center;">
  <form enctype="multipart/form-data" action="{{URL('categuty/update')}}" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}" />

      <input type="hidden" value="{{$id}}"  name="id">

  <div >
    <div >
      <input type="text" class="form-control" name="categuryname" placeholder="categury name">
    </div>
    <br>
    <div>
       <input class="btn btn-primary" style="background-color:yellow" type="file" id="myFile" name="filename">
    </div>
  </div>
  <br>

  <button style="background-color:yellow" type="submit" class="btn btn-primary">upads  category</button>


</form>

</div>


@stop
