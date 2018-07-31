<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit infor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>Edit Product</h1>
    </div>
    <div >
        <a href="/admin/product/create">Create</a>
        <div class="clearfix"></div>
        <a href="/admin/product"  style="margin-left: 10px;"><i class="fas fa-list-alt"></i>List</a>
    </div>
    <div class="row" style="margin-top: 30px">
        <form action="/admin/product/{{$obj_view->id}}" method="POST">
            @method('PUT')
            <input type="hidden" name="id" value="{{$obj_view->id}}">
            {{csrf_field()}}
            <div class="form-group">
                <label>Product name</label>
                <input type="text" name="name" class="form-control" value="{{$obj_view->name}}">
            </div>
            <div class="form-group">
                <label>Price </label>
                <input type="Text" name="price" class="form-control" value="{{$obj_view -> price}}">
            </div>
            <div class="form-group">
                <label>Category </label>
                <select name="categoryId" class="form-control">
                    <option value="1" {{$obj_view -> categoryId == 1 ? 'selected' : ''}}>Converse </option>
                    <option value="2" {{$obj_view -> categoryId == 2 ? 'selected' : ''}}>Balenciaga</option>
                    <option value="3" {{$obj_view -> categoryId == 3 ? 'selected' : ''}}>Rick Owens</option>
                    <option value="4" {{$obj_view -> categoryId == 4 ? 'selected' : ''}}>Nike</option>
                    <option value="5" {{$obj_view -> categoryId == 5 ? 'selected' : ''}}>Hunter</option>
                </select>
            </div>
            <div class=" form-group">
                <label>Image </label>
                <input type="text" name="image" class="form-control" value="{{$obj_view -> image}}">

            </div>
            <div class="form-group">
                <label> Description <br> </label>
                <textarea rows="4" cols="50" name="description" class="form-control">{{$obj_view -> description}}</textarea>
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