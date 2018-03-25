<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</head>
<body>
<center>

        <form action="/updateLocation" method="post">
            <table>
                @foreach($data as $value)
                <tr>
                    {{ csrf_field() }}
                    <td>ID : </td>
                    <td>{{ $value->location_id }}</td>
                    <td><input type="hidden" name="location_id" value={{ $value->location_id }}></td>
                </tr>
                <tr>
                    <td>Location : </td>
                    <td><input type="text" name="name" value={{ $value->name }}></td>
                </tr>
                <tr>
                    <td>Route : </td>
                    <td><input type="text" name="route" value={{ $value->route }}></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
                @endforeach
            </table>
        </form>
        <td><a href="/showlocation"><button>Back</button></a></td>
</center>
</body>
</html>
