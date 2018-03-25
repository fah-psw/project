<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</head>
<body>
<center>

        <form action="/updateStore" method="post">
            <table>
                @foreach($data as $value)
                <tr>
                    {{ csrf_field() }}
                    <td>ID : </td>
                    <td>{{ $value->store_id }}</td>
                    <td><input type="hidden" name="store_id" value={{ $value->store_id }}></td>
                </tr>
                <tr>
                    <td>Store : </td>
                    <td><input type="text" name="store_name" value={{ $value->store_name }}></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
                @endforeach
            </table>
        </form>
        <td><a href="/showstore"><button>Back</button></a></td>
</center>
</body>
</html>
