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
            <td>Username</td>
            <td>Password</td>
            <td>Name</td>
            <td>Route</td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{ $value->sender_id }}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->password }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->route }}</td>
            <td><a href="/deletesender/{{ $value->sender_id }}"><button>Delete</button></a></td>
        </tr>
        @endforeach
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a href="/deletedata"><button>Back</button></a></td>
    </table>
</center>
</body>
</html>