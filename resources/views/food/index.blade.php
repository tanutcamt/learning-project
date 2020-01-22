<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Foods</h1>
    <a href="/admin/food/create">เพิ่มอาหาร</a>

    <table>
        <tr>
            <td>Name</td>
            <td>Price</td>
            <td>Action</td>
            <td>Delete</td>
        </tr>
       @foreach($foods as $f)
       <tr>    
            <td>{{ $f->name }}</td>
            <td>{{ $f->price }}</td>
            <td><a href="/admin/food/{{$f->id}}/edit">แก้ไข</td>
            <td>
                <form action="/admin/food/{{$f->id}}" method="post">
                    @csrf
                    @method('delete');

                    <input type="submit" value="ลบ">
                </form>
            </td>
        </tr>
       @endforeach
    </table>
</body>
</html>