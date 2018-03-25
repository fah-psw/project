<!DOCTYPE html>
<html>
<head>
    <title>Update Form</title>
</head>
<body>
<center>

        <form action="/updateSender" method="post">
            <table>
                @foreach($data as $value)
                <tr>
                    {{ csrf_field() }}
                    <td>ID : </td>
                    <td>{{ $value->sender_id }}</td>
                    <td><input type="hidden" name="sender_id" value={{ $value->sender_id }}></td>
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
                    <td>Route : </td>
                    <td><input type="text" name="route" value={{ $value->route }}></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
                @endforeach
            </table>
        </form>
        <td><a href="/showsender"><button>Back</button></a></td>
</center>
</body>
</html>
