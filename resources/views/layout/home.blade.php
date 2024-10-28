

@extends('master')
@section('content')
<h2>all articles</h2>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>remove</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <!-- <td>{{$article->img}}</td> -->
                    <td>
                        <form action="/admin/{{$article->id}}" method="post">
                            @csrf
                            @method('delete')


                            <button class="btn btn-danger">delete</button>
                        </form>


                    </td>
                    <td>
                        <form action="/admin/{{$article->id}}/edit" method="get">
                            @csrf




                            <button class="btn btn-primary">edit</button>
                        </form>
                    </td>





                </tr>


            @endforeach
        </tbody>
    </table>
    {{ $articles->links('layout.paginate') }}

    <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-center">
        <!-- <form class=""
            action="/admin" method="get">
            @csrf




            <button class="btn btn-info  ">Home</button>

        </form> -->

        <form class=""
            action="/admin/create" method="get">
            @csrf




            <button class="btn btn-primary  ">create</button>

        </form>
        <!-- <form class=""
            action="{{Route('upload')}}" method="get">
            @csrf




            <button class="btn btn-info  ">upload image</button>

        </form> -->

    </div>

@endsection