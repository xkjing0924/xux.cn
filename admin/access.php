<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://www.xux.cn/xux/css/style.css">
    <title>xux.cn|admin登录</title>
<style>

*{
    margin: 0;
    padding: 0;
    text-align: center;
}
html{
    background-image: url("http://xux.cn/bing.php");
    opacity: 0.9;
    width: 100%;
    height: 100%;
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
.input{
    width: 250px;
    height: 42px;
    border: 0.5px;
    color: #999;
}

.input:active{
    border: 1px;
    color: #000;
}

.input:hover{
    border: 1px;
    color: #000;
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

</style>
</head>
<body>

    <div class="showcase">
<?php
echo '<h1 class="heading">';
@$d = date("G");
$d = $d + 8;
if($d>=3 && $d<=11){
    echo '早上';
}elseif($d>11 && $d<=12){
    echo '中午';
}elseif($d>12 && $d<=17){
    echo '下午';
    echo '<style>html,.btn{
        color:#edebe9;
    }.showcase{
        background: #323130;
    }
    </style>';
}else{
    echo '晚上';
    echo '<style>html,.btn{
        color:#edebe9;
    }.showcase{
        background: #323130;
    }
    </style>';
}
echo '好</h1>';

?>
<form action="serve.php" method="POST">
<h2 class="s-heading">用户名</h2>
<input type="text" class="input" name="uname" placeholder="用户名">
<h2 class="s-heading">密码</h2>
<input type="password" class="input" name="upassword" placeholder="密码">
<button type="submit" class="btn">登录</button>
</form>

</div>
<style>
.showcase{
    width: 500px;
    height: 590px;
    margin: 10em auto; 
}
</style>
</body>
</html>