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
    <table>
        <tr>
            <th>id</th>
            <th>title</th>

            <th>delete</th>
            <th>edit</th>
         </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>

            <td><a href="category/delete/{{$category->id}}">delete </a></td>
            <td><a href="category/edit/{{$category->id}}"> edit </a></td>
        </tr>
        @endforeach

    </table>
</body>
</html>
