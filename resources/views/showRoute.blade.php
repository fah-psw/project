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
            <td>Route</td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{ $value->route_id }}</td>
            <td>{{ $value->descr }}</td>
            <td><a href="/editRoute/{{ $value->route_id }}"><button>Edit</button></a></td>
        </tr>
        @endforeach
        <td></td>
        <td></td>
        <td><a href="/editdata"><button>Back</button></a></td>
    </table>
</center>
</body>
</html>