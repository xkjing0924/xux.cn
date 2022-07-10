<!-- this file is download from Github,originally by xkjing0924 and the site "http://xux.cn/",please save this note -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="零下拾度的个人网站">
    <meta name="keyword" content="零下拾度">
    <link rel="shortcut icon" type="favicon.ico" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <title>xux.cn|报告</title>

</head>
<style>
    .l-heading{
        padding-top: 90px;
    }
</style>
<body class="edition-body">
<header>
<?php
include('../frames/nav.php');
?>
 		  <ul>
                    <li><a class="current" href="http://xux.cn/xux/index.php">首页</a></li>
                    <li><a href="http://www.xux.cn/tools/index.php" target="_blank">工具箱</a></li>
                    <li><a href="contact.php">联系</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="ask">
    <h1 class="l-heading">更新日志</h1>
<?php


@$fp = fopen("../store/edition.txt","r");

while(!feof($fp))
{
    $order = fgets($fp,999);
    echo iconv("GBK//IGNORE","UTF-8",$order).'<br>';
}
fclose($fp);

?>
    </div>
    <div class="main-footer">
        <footer>
        <div class="content">
            <p>零下拾度 &copy;2022 All Right Reserved</p>
        </div>
        </footer>
    </div>
</body>
</html>
