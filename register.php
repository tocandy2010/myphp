<?php
include_once('./sql.php');

if(isset($_POST['account'])){
    $account = $_POST['account'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    $realname = $_POST['realname'];

    if($pass !== $repass ){
        echo 'errorp';
        exit;
    }

    $pass = password_hash($pass,PASSWORD_DEFAULT);

    $icon = null;
    if($_FILES['icon']['error']== 0){
        $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));
    }
    $sql = "insert into member (account,pass,realname,icon)values(?,?,?,?)";
    $stm = $mysqli->prepare($sql);
    $stm->bind_param("ssss",$account,$pass,$realname,$icon);
    $stm->execute();
    if( $mysqli->affected_rows ===1){
        header("location:login.php");
    }else{
        echo 'error';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post" onsubmit='return isSubmit()' enctype="multipart/form-data">
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
            <input type="submit" value="註冊">
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
            let account = document.getElementById('account').value;
            let xhr = getxhr();
            xhr.open('get',"./isNewAccount.php?account="+account,true);
            xhr.onreadystatechange = function(){
                if(this.readyState === 4 && this.status === 200){
                    if(xhr.responseText === '0'){
                        document.getElementById('amsg').innerHTML = 'ok';
                        isData = true;
                    }else{
                        document.getElementById('amsg').innerHTML = 'xx';
                    }
                }
            }
            xhr.send();
        }
        function isSubmit(){
            return isData;
        }
    </script>
</body>
</html>