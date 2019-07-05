<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="checkAccount.php" method='get'>
        <div>
            <label for="account">帳號</label>
            <input type="text" name = 'account' id = 'account'>
        </div>
        <div>
            <label for="pass">密碼</label>
            <input type="password" name = 'pass' id="pass">
        </div>
        <div>
            <input type="submit" value="登入">
        </div>
    </form>
</body>
</html>