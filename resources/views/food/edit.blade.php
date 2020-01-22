<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>เพิ่มอาหาร</h1>
    <form action="/admin/food/{{$food->id}}" method="post">
    @method('put')
    @csrf
    <label>
        ชื่ออาหาร
        <input type="text" name="name_food" value="{{$food->name}}">
    </label>


    <label>
        ราคา
        <input type="text" name="price" value="{{$food->price}}">
    </label>

        <input type="submit">
    </form>
</body>
</html>