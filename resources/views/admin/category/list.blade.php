<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<h1 class="mt-2 mr-2">List Category</h1>
<div>
    <a href="/admin/category/create">Create</a>
</div>

<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    @foreach($list_obj as $item)
        <tbody>
        <tr>
            <th scope="row">{{$item -> id}}</th>
            <td>{{$item->name}}</td>
            <td>
                <div class="card"
                     style="background-image: url('{{$item->images}}');">
                </div>
            </td>
            <td><a href="/admin/category/{{$item -> id}}/edit">Edit</a></td>
            <td><a href="#/admin/category/{{$item -> id}}" id="{{$item -> id}}" class="delete-obj">Delete</a></td>
        </tr>
        </tbody>
    @endforeach
</table>


</body>
</html>