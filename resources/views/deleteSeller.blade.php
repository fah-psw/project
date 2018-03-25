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
            <td>Store</td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{ $value->seller_id }}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->password }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->store }}</td>
            <td><a href="/deleteseller/{{ $value->seller_id }}"><button>Delete</button></a></td>
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