<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <form action="logAuth.php" method="post" name="login">
        <table width="400" border="0" align="center" cellpadding="1">
            <tr>
                <td colspan="2">
                    <h2>Login</h2>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <p>username user, password 123456</p>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>

</html>
