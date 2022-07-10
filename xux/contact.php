<!-- this file is download from Github,originally by xkjing0924 and the site "http://xux.cn/",please save this note -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="零下拾度的个人网站">
    <meta name="keyword" content="零下拾度">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/res-style.css">
    <link rel="shortcut icon" type="favicon.ico" href="./img/favicon.ico">
    <title>xux.cn|联系</title>
    <script src="./js/main.js"></script>
</head>
<?php
?>
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
    <section class="contact-info">
        <div class="container-contact">
            <h1 class="l-heading">联系</h1>
            <p>如有疑问，请填写一下信息联系我</p>
            <form action="./php/process.php" method="post">
                <div class="form-group">
                    <label for="name">姓名</label>
                    <input type="text" name="name" class="name">
                </div>
                <div class="form-group">
                    <label for="email">邮箱</label>
                    <input type="text" name="email" class="email">
                </div>
                <div class="form-group">
                    <label for="message">反馈内容</label>
                    <textarea input type="text" name="message" class="message"></textarea>
                </div>
                <button type="submit" class="btn">提交</button>
            </form>
        </div>
    </section>
    <div>
        <section class="features">
            <div>
            <div class="box-contact bright">
                <i class="fa fa-cloud fa-3x" aria-hidden="true"></i>
                <h3>GitHub</h3>
                <a href="https://www.aliyundrive.com/u/2ac253e0985949b4a2d1ffb12cab871f" class="btn" target="_blank">链接</a>
            </div>
            <div class="box-contact dark">
                <i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i>
                <h3>邮箱</h3>
                <p class="test">xkjing<br>@<br>outlook.com</p>
            </div>
            <div class="box-contact bright">
                <i class="fa fa-weixin fa-3x" ></i>
                <h3>微信</h3>
                <p class="test">xiasuijiu</p>
            </div>
        </div>
        </section>
        </div>
    <div class="main-footer">
        <footer>
            <div class="content">
                <p>零下拾度 &copy;2022 All Right Reserved &nbsp;&nbsp;| &nbsp;&nbsp;<a class="edition" href="./php/edition.php" target="_blank">更新日志</a></p>
            </div>
        </footer>
    </div>
</body>

</html>