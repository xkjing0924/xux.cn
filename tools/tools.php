<head>
<link rel="stylesheet" href="css.css">
</head>
<?php
/* lianzi */
if(@$_POST['select'] == "tyz"){
    if($_POST['zi_sub'] == '提交'){
        $zi1 = $_POST['zi'];
        $zi1 = trim($zi1);
            if($zi1 == "" || mb_strlen($zi1,"utf-8") > 1){
                echo '请输入单个汉字';
                exit();
            }else{
                echo '<head><meta http-equiv="refresh" content="0;url=http://xux.cn/font_to_image/fonttest.php?zi='.$zi1.'"></head>';
                exit();
            }
        }
    }
/* baidu */
    elseif(@$_POST['select'] == "baidu"){
        if($_POST['zi_sub'] == '提交'){
            $zi1 = $_POST['zi'];
            $zi1 = trim($zi1);
                if($zi1 == ""){
                    echo '请输入搜索内容';
                    exit();
                }else{
                    echo '<head><meta http-equiv="refresh" content="0;url=https://www.baidu.com/#ie=UTF-8&wd='.$zi1.'"></head>';
                    exit();
                }
        }
    }
    elseif(@$_POST['select'] == "youdao"){
        if($_POST['zi_sub'] == '提交'){
            $zi1 = $_POST['zi'];
            $zi1 = trim($zi1);
            if($zi1 == ""){
                echo '请输入搜索内容';
                exit();
            }else{
                echo '<head><meta http-equiv="refresh" content="0;url=https://youdao.com/result?word='.$zi1.'&lang=en"></head>';
                exit();
            }
        }
    }
    elseif(@$_POST['select'] == "gushi"){
        if($_POST['zi_sub'] == '提交'){
            $zi1 = $_POST['zi'];
            $zi1 = trim($zi1);
            $one = mb_substr($zi1,0,1,"utf8");
            if($zi1 == ""){
                echo '请输入搜索内容';
                exit();
            }else{
                echo '<head><meta http-equiv="refresh" content="0;url=https://so.gushiwen.cn/search.aspx?value='.$zi1.'&valuej='.$one.'"></head>';
                exit();
            }
        }
    }
    elseif($_POST['zi_sub'] == '去除'){
        $para = $_POST['para'];
        $para = str_replace(" ","",$para);
        $para = str_replace("&nbsp;","",$para);
        $para = str_replace("<br>","",$para);
        $para = str_replace("\n","",$para);
        echo "<h3>被剔除空格的段落</h3><br>".$para;
    }
    elseif($_POST['zi_sub'] == '加密'){
        $jm = $_POST['jm'];
        $jm = md5($jm);
        echo "<h3>被md5加密后的段落</h3><br>".$jm;
    }
?>