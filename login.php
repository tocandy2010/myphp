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
            <input type="text" name='account' id='account'>
        </div>
        <div>
            <label for="pass">密碼</label>
            <input type="password" name='pass' id="pass">
        </div>
        <div>
            <label for="code">驗證碼</label>
            <input type="text" name='vcode' id="code">
            <img src="./vcode.php" alt="驗證碼" id='vcode'>
        </div>
        <div>
            <input type="submit" value="登入">
            <a href='http://localhost/myphp/register.php'>註冊</a>

        </div>
    </form>
    <script>
        document.getElementById('vcode').addEventListener('click', function(e) {
            this.src = "./vcode.php?" + Math.random();
        })
    </script>
</body>

</html>