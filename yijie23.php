<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="./yijie26.php" method='POST'>
        <div>
            <label for="lo">地區</label>
            <select name="location" id="lo">
                <option value="10">臺北市</option>
                <option value="11">臺中市</option>
                <option value="12">基隆市</option>
                <option value="13">臺南市</option>
                <option value="14">高雄市</option>
                <option value="15">新北市</option>
                <option value="16">宜蘭縣</option>
                <option value="17">桃園市</option>
                <option value="34">嘉義市</option>
                <option value="18">新竹縣</option>
                <option value="19">苗栗縣</option>
                <option value="21">南投縣</option>
                <option value="22">彰化縣</option>
                <option value="35">新竹市</option>
                <option value="23">雲林縣</option>
                <option value="24">嘉義縣</option>
                <option value="27">屏東縣</option>
                <option value="28">花蓮縣</option>
                <option value="29">臺東縣</option>
                <option value="32">金門縣</option>
                <option value="30">澎湖縣</option>
                <option value="33">連江縣</option>
            </select>
            <label for="male">男</label>
            <input type="radio" name='sex' id='male' checked value=1>
            <label for="female">女</label>
            <input type="radio" name='sex' id='female' value=2>
            <input type="submit" value='產生'>
        </div>
    </form>
    <div>
        <p> <?php echo isset($show)&&!empty($show)?$show:'' ;?></p>
    </div>
</body>

</html>