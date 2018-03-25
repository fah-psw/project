<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</head>
<body>
<center>

        <form action="/updateSeller" method="post">
            <table>
                @foreach($data as $value)
                <tr>
                    {{ csrf_field() }}
                    <td>ID : </td>
                    <td>{{ $value->seller_id }}</td>
                    <td><input type="hidden" name="seller_id" value={{ $value->seller_id }}></td>
                </tr>
                <tr>
                    <td>Username : </td>
                    <td><input type="text" name="username" value={{ $value->username }}></td>
                </tr>
                <tr>
                    <td>Password : </td>
                    <td><input type="text" name="password" value={{ $value->password }}></td>
                </tr>
                <tr>
                    <td>Name : </td>
                    <td><input type="text" name="name" value={{ $value->name }}></td>
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
        <td><a href="/showseller"><button>Back</button></a></td>
</center>
</body>
</html>
