<!-- this tool-case is from http://xux.cn ; last update by minusten,20220706-->
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<!-- get stylesheet -->
    <link rel="stylesheet" href="http://xux.cn/xux/css/style.css">
    <link rel="stylesheet" href="css.css">
</head>
<!-- navbar -->
<span class="tools-nav">
<!-- javascript -->
<script>
function openSideMenu () {
    document.getElementById('side-menu')
    .style.width = '250px';
    document.getElementById('main')
    .style.marginLeft = '250px';
}

function closeSideMenu () {
    document.getElementById('side-menu')
    .style.width = '0';
    document.getElementById('main')
    .style.marginLeft = '0';
}</script>
                <span class="open-side" onclick="openSideMenu()">
                    <a href="#">
                        <svg width="30" height="30" class="svg">
                            <path d="M0,5 30,5" stroke="#222" strock-width="5" />
                            <path d="M0,14 30,14" stroke="#222" strock-width="5" />
                            <path d="M0,23 30,23" stroke="#222" strock-width="5" />
                        </svg>
                    </a>
                </span>
                <div id="side-menu" class="side-nav">
                    <a href="#" class="btn-close" onclick="closeSideMenu()">&times;</a>
                    <a href="?bar=search">搜索</a>
                    <a href="?bar=para">去空格</a>
                    <a href="?bar=jiami">加密</a>
                    <a href="?bar=news">新闻</a>
                </div>
</span>
<!-- begin php-serve -->
<?php
// main page
if(@$_GET['bar'] == ""){
?>
<div class="tools-heading">零下拾度的工具箱</div>
<div>点击左边侧边栏查看工具</div>
<?php
}?>

<?php
// search for zi
if(@$_GET['bar'] == "search"){
?>
<form action="tools.php" method="post" target="_blank">
<h3>输入要查搜索的内容</h3>
<div class="div-search">
<select name="select" class="select">
    <option value="baidu">百度</option>
    <option value="youdao">英语</option>
    <option value="tyz">练字</option>
    <option value="gushi">古诗</option>
</select>
<input type="text" name="zi" length="1" class="search">
</div>
<br>
<button type="submit" name="zi_sub" value="提交">提交</button>
</form>
<br>

<?php
// delete space
}elseif(@$_GET['bar'] == "para"){
?>
<form action="tools.php" method="post" target="_blank">
<h3>输入要去括号的段落</h3>
<textarea type="text" name="para"></textarea>
<br>
<button type="submit" name="zi_sub" value="去除">去除</button>
</form>
<br>

<?php
// md5 string
}elseif(@$_GET['bar'] == "jiami"){
?>
<form action="tools.php" method="post" target="_blank">
<h3>输入要md5加密的字符串</h3>
<textarea type="text" name="jm"></textarea>
<br>
<button type="submit" name="zi_sub" value="加密">加密</button>
</form>
<br>
<?php
}elseif(@$_GET['bar'] == "news"){
?>
<style>
*{
text-align:center;
}
h2{
font-size: 30px;
}
.top{
font-size: 20px;
}
.date{
text-align: left;
font: 20px;
}
h3{
    margin: 0;
}
.media{
    padding-top: 3px;
    margin-bottom: 55px;
}
.bottom{
    padding-bottom: 90px;
}
h2{
    font-size: 30px;
    padding-top: 100px;
}
</style>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<script src="http://xux.cn/frames/chrome_player.js"></script>
<h2>新闻</h2>
<h3 class="top">电台</h3>
<a href="https://npr-ice.streamguys1.com/live.mp3" target="_blank">NPR 24 Hour Program Stream</a><br>
<video controls="" autoplay="" name="media" class="media"><source src="https://npr-ice.streamguys1.com/live.mp3" type="audio/mpeg"></video><br>
<a href="https://stream.live.vc.bbcmedia.co.uk/bbc_world_service" target="_blank">BBC World Service</a><br>
<video controls="" autoplay="" name="media"><source src="https://stream.live.vc.bbcmedia.co.uk/bbc_world_service" type="audio/mpeg"></video>
<h3 class="top">视频</h3>
<a href="http://watchthis.chinadaily.com.cn/" target="_blank" class="bottom">China daily videos</a>


<?php
}
?>