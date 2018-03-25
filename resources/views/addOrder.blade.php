<!DOCTYPE html>
<html>
<head>
    <title>Add Form</title>
</head>
<body>
<center>

        <form action="/addOrder" method="post">
            <table>
                <tr>
                    {{ csrf_field() }}
                    <td>Menu : </td>
                    <td><input type="text" name="menu"></td>
                </tr>
                <tr>
                    <td>Amount : </td>
                    <td><input type="password" name="amount"></td>
                </tr>
                <tr>
                    <td>Add : </td>
                    <td><input type="text" name="add"></td>
                </tr>
                <tr>
                    <td>Price : </td>
                    <td><input type="text" name="price"></td>
                </tr>
                <tr>
                    <td>Name : </td>
                    <td><input type="text" name="cus_name"></td>
                </tr>
                <tr>
                    <td>Phone : </td>
                    <td><input type="text" name="cus_phone"></td>
                </tr>
                <tr>
                    <td>Location : </td>
                    <td><input type="text" name="location"></td>
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


