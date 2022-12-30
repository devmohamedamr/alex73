<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

    <title>Document</title>
</head>
<body>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
         <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{ url('category/update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$category->id}}">
        <input type="text" name="title" value="{{$category->title}}">
        <input type="submit" value="update category">
    </form>
</body>
</html>
