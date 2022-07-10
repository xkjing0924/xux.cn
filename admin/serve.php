<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://www.xux.cn/xux/css/style.css">
    <title>xux.cn|登录处理</title>
<style>

*{
    margin: 0;
    padding: 0;
    text-align: center;
}

html{
    background: #666;
}

.heading{
    font-size: 50px;
    padding-top: 40px;
    line-height: 100px;
}
.s-heading{
    font-size: 23px;
    padding-top: 0px;
    padding-bottom: 0px;
    line-height: 80px;
}

.btn{
    border: none;
    display: block;
    margin: auto;
    margin-top: 40px;
    margin-bottom: 40px;
    font-size: 20px;
    background: none;
    width: 325px;
    padding: 15px 30px;
    background-color: #555;
}

.showcase{
    width: 500px;
    height: 590px;
    margin: 10em auto; 
}
</style>
</head>
<body>
<?php

$uname = md5($_POST['uname']);
$upassword = md5($_POST['upassword']);
if($uname == 'bf933d98c387e0134372141f58979263' && $upassword == 'ebf8a4a2c31fe76e5b8a4ce5a4bbb907'){
    setcookie("wli","inlog");
    Header("Location:http://www.xux.cn/admin/admin.php");
    exit();
}else{
    echo '<h1 class="header">账号密码错误</h1>';
    exit();
}


?>


</body>
</html>