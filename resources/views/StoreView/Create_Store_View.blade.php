@extends('layout.htmld_Layout')
@section('content')



 <h1 style="text-align: center;color:green">create Store</h1>


<!-- naem of store -->
<form  style="padding:20px;text-align: center;" class="col-auto my-1" enctype="multipart/form-data" action="{{URL('store/creat')}}" method="POST">

       <input type="hidden" name="_token" value="{{ csrf_token() }}" />

 

    <div style="width:300px" class="form-group">
    <label for="exampleInputEmail1">new name</label>
    <input  type="name" class="form-control" name="store_name"  placeholder="new name store">
    </div> 

    <br>

<div style="width:300px">
  <label for="phone">new phone number:</label>
<br>
<input   id="phone" class="form-control"  name="phone" placeholder="0599999999">

</div>



<!--  address  -->
<br>
 

    <div style="width:300px" class="form-group">
    <label>address store</label>
    <input type="name" class="form-control" name="address"  placeholder="Store address">
 
  </div> 

<br>


 <div  class="col-auto my-1">
      <label style="color:green"  class="mr-sm-2" for="inlineFormCustomSelect">new  Categury:</label>
      <br>

      <select name="id_catgury" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option  selected>select Categury ...</option> 
        @foreach($categorys as $category) 

        <option value="{{$category->ID}}">{{$category->name}} </option>
 
       @endforeach

      </select>
    </div>  


<br>
<!-- image chose -->
    <div>
       <input class="btn btn-primary" style="background-color:green" type="file" id="myFile" name="filename">
    </div>
<br>



<!-- submit button  -->
 <button style="background-color: green" type="submit" class="btn btn-primary">upade store </button>
      
 

</form>

@stop
