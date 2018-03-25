<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</head>
<body>
<center>

        <form action="/updateRoute" method="post">
            <table>
                @foreach($data as $value)
                <tr>
                    {{ csrf_field() }}
                    <td>ID : </td>
                    <td>{{ $value->route_id }}</td>
                    <td><input type="hidden" name="route_id" value={{ $value->route_id }}></td>
                </tr>
                <tr>
                    <td>Route : </td>
                    <td><input type="text" name="descr" value={{ $value->descr }}></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
                @endforeach
            </table>
        </form>
        <td><a href="/showroute"><button>Back</button></a></td>
</center>
</body>
</html>
