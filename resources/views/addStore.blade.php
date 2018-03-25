<!DOCTYPE html>
<html>
<head>
    <title>Add Form</title>
</head>
<body>
<center>

        <form action="/addStore" method="post">
            <table>
                <tr>
                    {{ csrf_field() }}
                    <td>Store : </td>
                    <td><input type="text" name="store_name"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Add"></td>
                </tr>
            </table>
        </form>

</center>
</body>
</html>


