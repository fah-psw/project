<!DOCTYPE html>
<html>
<head>
    <title>Add Form</title>
</head>
<body>
<center>

        <form action="/addRoute" method="post">
            <table>
                <tr>
                    {{ csrf_field() }}
                    <td>Route : </td>
                    <td><input type="text" name="descr"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Add"></td>
                </tr>
            </table>
        </form>

</center>
</body>
</html>


