<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="shortcut icon" type="favicon.ico" href="../img/favicon.ico">
    <title>xux.cn|管理员</title>
</head>
<?php
if($_COOKIE["wli"] != "inlog"){
    echo header("location:./access.php");
}
?>
<body class="html-access">
    <nav class="navbar">
                <ul>
                    <li><a href="http://www.xux.cn" target="_blank">查看客户端</a></li>
                </ul>
        </nav>
        <div class="container">
            <div class="classify">
                <h2>提交时间&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;姓名&nbsp;&nbsp;&nbsp;&nbsp;邮箱&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;反馈内容</h2>
            </div>
            <div class="ask">
<?php
@$fp = fopen("../xux/store/contact.txt","r");

if(!$fp)
{
    echo '<h1 class="heading">当前没有反馈信息</h1>';
    exit;
}
while(!feof($fp))
{
    $order = fgets($fp,999);
    echo $order.'<br>';
}
fclose($fp);
?>  
</div>
</div>
</body>
<div class="main-footer">
        <footer>
            <p>零下拾度 &copy;2022 All Right Reserved</p>
        </footer>
    </div>
</html>

