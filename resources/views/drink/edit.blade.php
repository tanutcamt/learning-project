<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>เพิ่มเครื่องดื่ม</h1>
    <form action="/admin/drink/{{$drink->id}}" method="post">
    @method('put')
    @csrf
    <label>
        ชื่อเครื่องดื่ม
        <input type="text" name="name_drink" value="{{$drink->name}}">
    </label>

    <label>
        ราคา
        <input type="text" name="price" value="{{$drink->price}}">
    </label>

    <input type="submit">
</form>
    

</body>
</html>