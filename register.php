<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" onsubmit='return isSubmit()' enctype="multipart/form-data">
        <div class='reg'>
            <label for="account">帳號 : </label>
            <input type="text" name="account" id="account" onchange="isNewAccount()">
            <span id='amsg'></span>
        </div>
        <div>
            <label for="pass">密碼 : </label>
            <input type="password" name="pass" id="pass">
        </div>
        <div>
            <label for="repass">確認密碼 : </label>
            <input type="password" name="repass" id="repass">
        </div>
        <div>
            <label for="realname">姓名 : </label>
            <input type="text" name="realname" id="realname">
        </div><div>
            <label for="icon">頭像 : </label>
            <input type="file" name="icon" id="icon">
        </div>
        <div>
            <input type="button" value="註冊">
        </div>
    </form>
    <script>
        let isData = false;
        function getxhr(){
            let xhr = null;
            if(window.XMLHttpRequest){
                xhr = new XMLHttpRequest();
            }
            return xhr;
        }
        function isNewAccount(){
            let account = document.getElementById('account');
            let xhr = getxhr();
            xhr.open('get',"./isNewAccount.php?account="+account,true);
            xhr.onreadystatechange = function(){
                if(this.readyState === 4 && this.status === 200){
                    if(xhr.responseText === '0'){
                        document.getElementById('amsg').innerHTML = 'ok';
                        isDate = true;
                    }else{
                        document.getElementById('amsg').innerHTML = 'xx';
                    }
                }
            }
            xhr.send();
        }
        function isSubmit(){
            reutrn isDate;
        }
    </script>
</body>
</html>