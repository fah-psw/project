<!DOCTYPE html>
<html>
<head>
    <title>Add Form</title>
</head>
<body>
<center>

        <form action="/addSeller" method="post">
            <table>
                <tr>
                    {{ csrf_field() }}
                    <td>Username : </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>name : </td>
                    <td><input type="text" name="name"></td>
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

</center>
</body>
</html>


