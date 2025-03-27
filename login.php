<!doctype html>
<html>
<head>
    <meta charset="utf-8">
<title>login form</title>
</head>
<body>
<center><form method="post" action="hii.php">
        <table border="2">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="uname" placeholder="enter user name" required></td>
            </tr>
            <tr><td>password</td>
                <td><input type="password" name="passwoed" placeholder="Enter Password" required>
                </td>
            </tr>
            <tr><td>gender</td></tr>
            <tr><td>male</td><td><input type="radio" name="gender" value="male"></td></tr>
            <tr><td>female</td><td><input type="radio" name="gender" value="female"></td></tr>
            <tr><td>education</td></tr>
            <tr><td><input type="checkbox" name ="education[]" value="10th"></td><td>10th</td></tr>
            <tr><td><input type="checkbox" name ="education[]" value="12th"></td><td>12th</td></tr>
            <tr><td><input type="checkbox" name ="education[]" value="B.Tech"></td><td>B.Tech</td></tr>
            <tr><td><input type="submit" name="submit" value="submit"</td></tr>
        </table>
    </form>
</center>
</body>
</html>
