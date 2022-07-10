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
    <link rel="stylesheet" href="../css/resert.css">
    <title>xux.cn|报告</title>
</head>
<body>
<header>
<?php
include('../frames/nav.php');
?>
 		  <ul>
                    <li><a href="http://xux.cn/xux/index.php">首页</a></li>
                    <li><a href="http://www.xux.cn/tools/index.php" target="_blank">工具箱</a></li>
                    <li><a class="current" href="contact.php">联系</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="contact-report">
<?php
@$cur_date = date('H:i jS F');
@$name = $_POST['name'];
@$email = $_POST['email'];
@$message = $_POST['message'];
@$outputstring = "\r\n".$cur_date." \t\t".$name." \t\t".$email." \t\t".$message;
@$fp = fopen(".././store/contact.txt","ab");
@$check = strstr($email, "@");



if($name=="")
{
    echo '<h1 class="l-heading">大侠请留名！</h1>';
    echo '<a href="../contact.html" class="btn center">重新提交</a>';
    exit;
}
if($email=="")
{
    echo '<h1 class="l-heading">做好事请留联系方式！</h1>';
    echo '<a href="../contact.html" class="btn center">重新提交</a>';
    echo '<a href="https://www.outlook.com" class="btn center">创建一个</a>';
    exit;
}
if($check)
{}
else{
    echo '<h1 class="l-heading">邮箱地址不正确！</h1>';
    echo '<a href="../contact.html" class="btn center">重新提交</a>';
    echo '<a href="https://www.outlook.com" class="btn center">创建一个</a>';
    exit;
}
if($message=="")
{
    echo '<h1 class="l-heading">联系方式都留了，<br>写点什么吧！</h1>';
    echo '<a href="../contact.html" class="btn center">重新提交</a>';
    exit;
}

if(!$fp)
{
    echo '<h1 class="l-heading" >提交失败，<br>请重新提交</h1><br>';
    echo '<a href="../contact.html" class="btn center" >重新提交</a>';
    exit;
}
else{
    setcookie("nsjqrm","fbgl",time()+3600*24);
    echo '<h1 class="l-heading">感谢您的反馈！</h1>';
    echo '<p class="paragraph">您于';
    echo @date('H:i,jS F');
    echo '提交了反馈<br><br>' ;
    
    echo '<h3>您的姓名<br></h3><p class="echo-content">';
    echo $name ;
    echo '</p><h3><br>您的邮箱地址<br></h3><p class="echo-content">';
    echo $email;
    echo '</p><h3><br>您的反馈内容<br></h3><p class="echo-content">';
    echo $message ;
    echo '</p>';
    
    echo '</p>';
    
    echo '<h2 class="under-heading">我会尽快答复的！</h2>';
    echo '<a href="../index.php" class="btn center">回到首页</a>';   
}

fwrite($fp, $outputstring, strlen($outputstring));
fclose($fp);
?>
    </section>
    <div class="main-footer">
        <footer>
        <div class="content">
            <p>零下拾度 &copy;2022 All Right Reserved &nbsp;&nbsp;| &nbsp;&nbsp;<a class="edition" href="./php/edition.php" target="_blank">更新日志</a></p>
        </div>
        </footer>
    </div>
</body>
</html>
