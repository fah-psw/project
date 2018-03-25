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
            <td>Location</td>
            <td>Route</td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{ $value->location_id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->route }}</td>
            <td><a href="/deleteLocation/{{ $value->location_id }}"><button>Delete</button></a></td>
        </tr>
        @endforeach
        <td></td>
        <td></td>
        <td></td>
        <td><a href="/deletedata"><button>Back</button></a></td>
    </table>
</center>
</body>
</html>