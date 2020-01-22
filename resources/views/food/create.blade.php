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
    <form action="/admin/food" method="post">
    @csrf
    <label>
        ชื่ออาหาร
        <input type="text" name="name_food">
    </label>

    <label>
        ราคา
        <input type="text" name="price">
    </label>

    <input type="submit">
</form>
    

</body>
</html>