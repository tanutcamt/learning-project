<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>drink</h1>
    <a href="/admin/drink/create">เพิ่มเครื่องดื่ม</a>
    <table>
        <tr>
            <td>name</td>
            <td>price</td>
            <td>Action</td>
        </tr>
        @foreach($drinks as $d)
        <tr>
            <td>{{$d->name}}</td>
            <td>{{$d->price}}</td>
            <td><a href="/admin/drink/{{$d->id}}/edit">แก้ไข</td>
        </tr>
        @endforeach
    </table>
</body>

</html>