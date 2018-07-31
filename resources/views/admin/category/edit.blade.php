<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Edit category</h1>
    </div>
    <div >
        <a href="/admin/category/create">Create</a>
        <div class="clearfix"></div>
        <a href="/admin/category"  >List</a>
    </div>
    <div class="row">
        <form action="/admin/category/{{$obj_view->id}}" method="POST">
            @method('PUT')
            <input type="hidden" name="id" value="{{$obj_view->id}}">
            {{csrf_field()}}
            <div class="form-group">
                <label>Product name</label>
                <input type="text" name="name" class="form-control" value="{{$obj_view->name}}">
            </div>
            <div class="form-group">
                <label> Description <br> </label>
                <textarea rows="4" cols="50" name="description" class="form-control">{{$obj_view -> description}}</textarea>
            </div>
            <div class=" form-group">
                <label>Image </label>
                <input type="text" name="images" class="form-control" value="{{$obj_view -> images}}">
                <img src="{{$obj_view->images}}"  style="width:200px;"/>
            </div>

            <div class=" form-group">
                <input type="submit" value="Save" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-dark">
            </div>

        </form>
    </div>
</div>
</body>
</html>