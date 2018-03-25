<!DOCTYPE html>
<html>
<head>
    <title>Add Form</title>
</head>
<body>
<center>

        <form action="/addMenu" method="post">
            <table>
                <tr>
                    {{ csrf_field() }}
                    <td>Menu : </td>
                    <td><input type="text" name="menu_name"></td>
                </tr>
                <tr>
                    <td>Price : </td>
                    <td><input type="text" name="price"></td>
                </tr>
                <tr>
                    <td>Store : </td>
                    <td><input type="text" name="store"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Add"></td>
                </tr>
            </table>
        </form>
        <td><a href="/adddata"><button>Back</button></a></td>
</center>
</body>
</html>


