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

    <table>
        <tr>
            <td>Name</td>
            <td>Price</td>
        </tr>
       @foreach($foods as $f)
       <tr>    
            <td>{{ $f->name }}</td>
            <td>{{ $f->price }}</td>
        </tr>
       @endforeach
    </table>
</body>
</html>