<!DOCTYPE html>
<html>
<head>
    <title>Show Data Form</title>
</head>
<body>
<center>
    <table>
        <tr>
            <td>ID</td>
            <td>Menu</td>
            <td>Price</td>
            <td>Store</td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{ $value->menu_id }}</td>
            <td>{{ $value->menu_name }}</td>
            <td>{{ $value->price }}</td>
            <td>{{ $value->store }}</td>
            <td><a href="/deleteMenu/{{ $value->menu_id }}"><button>Delete</button></a></td>
        </tr>
        @endforeach
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a href="/deletedata"><button>Back</button></a></td>
    </table>
</center>
</body>
</html>