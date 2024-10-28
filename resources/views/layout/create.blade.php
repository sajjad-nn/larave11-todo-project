@extends('master')
@section('content')
<h1>Create Articles:</h1>
@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error )
    <li>{{$error}}</li>

    @endforeach
  </ul>
</div>

@endif
<form action="/admin/create" method="post">
@csrf
<div class="form-group">
  <label for="title">title:</label>
  <input type="text" name="title" class="form-control">

  <label for="number">number:</label>
  <input type="number" name="number" class="form-control">
  
  <label for="email">email:</label>
  <input type="email" name="email" class="form-control">

  <label for="slug">slug:</label>
  <textarea name="slug" id="body" cols="30" rows="10" class="form-control"></textarea>
  <button type="submit" class="btn btn-danger">send</button>
</div>


</form>




@endsection


