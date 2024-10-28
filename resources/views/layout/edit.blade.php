@extends('master')

@section('content')
<h1>edit Articles:</h1>
@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error )
    <li>{{$error}}</li>

    @endforeach
  </ul>
</div>

@endif
<form action="/admin/{{$article->id}}/edit" method="post">
@csrf
@method('put')
<div class="form-group">
  <label for="title">title:</label>
  <input type="text" name="title" class="form-control" value="{{$article->title}}">

  <label for="number">number:</label>
  <input type="number" name="number" class="form-control" value="{{$article->number}}">
  
  <label for="email">email:</label>
  <input type="email" name="email" class="form-control" value="{{$article->email}}">

  <label for="slug">slug:</label>
  <textarea name="slug" id="body" cols="30" rows="10" class="form-control">{{$article->slug}}</textarea>
  <button class="btn btn-danger">update</button>
</div>


</form>


@endsection