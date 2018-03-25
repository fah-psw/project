<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</head>
<body>
<center>

        <form action="/updateMenu" method="post">
            <table>
                @foreach($data as $value)
                <tr>
                    {{ csrf_field() }}
                    <td>ID : </td>
                    <td>{{ $value->menu_id }}</td>
                    <td><input type="hidden" name="menu_id" value={{ $value->menu_id }}></td>
                </tr>
                <tr>
                    <td>Menu : </td>
                    <td><input type="text" name="menu_name" value={{ $value->menu_name }}></td>
                </tr>
                <tr>
                    <td>Price : </td>
                    <td><input type="text" name="price" value={{ $value->price }}></td>
                </tr>
                <tr>
                    <td>Store : </td>
                    <td><input type="text" name="store" value={{ $value->store }}></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
                @endforeach
            </table>
        </form>
        <td><a href="/showmenu"><button>Back</button></a></td>
</center>
</body>
</html>
