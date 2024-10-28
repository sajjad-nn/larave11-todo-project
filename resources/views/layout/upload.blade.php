<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{Route('upload-img')}}" class="mb-3 row" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button type="submit" class="btn btn-danger ">upload</button>
    </form>

</body>

</html>