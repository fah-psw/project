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
            <td>Store</td>
        </tr>
        @foreach($data as $value)
        <tr>
            <td>{{ $value->store_id }}</td>
            <td>{{ $value->store_name }}</td>
            <td><a href="/editStore/{{ $value->store_id }}"><button>Edit</button></a></td>
        </tr>
        @endforeach
        <td></td>
        <td></td>
        <td><a href="/editdata"><button>Back</button></a></td>
    </table>
</center>
</body>
</html>