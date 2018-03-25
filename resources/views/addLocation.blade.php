<!DOCTYPE html>
<html>
<head>
    <title>Add Form</title>
</head>
<body>
<center>

        <form action="/addLo" method="post">
            <table>
                <tr>
                    {{ csrf_field() }}
                    <td>Location Name : </td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Path : </td>
                    <td><input type="text" name="route"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Add"></td>
                </tr>
            </table>
        </form>

</center>
</body>
</html>


