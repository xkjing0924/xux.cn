<?php
//$font = '全新硬笔楷书简.ttf';


	/**
     * 使用GD库在图片上写文字
     */
function createImage()
    {
        //header('Content-Type: image/png');#如果你先在浏览器上展示图片的合成好的图片请打开此注释。
        $img = 'backgroundimage.png';//背景图本地路径
        $str = '我被打印在图片上拉';//需要打印在背景图上的文字
        $text = preg_split('/(?<!^)(?!$)/u', $str);//将文字拆分为数组（中文，需要字体库才能正常显示，若字体库引入错误或当前使用的字体库本身就不支持中文，最后生成图片后都将无法显示你打印出的中文）注意：字符串需要是UTF-8 编码的文本字符串。
        $code = preg_split('/(?<!^)(?!$)/u', 'IM-1592797913-7EBC0DF3-872B');//将值拆分为数组（英文，英文无需字体库即可直接打印在背景图上。）注意：字符串需要是UTF-8 编码的文本字符串。
        $size = 20;//字体大小
        $font = "全新硬笔楷书简.ttf";//加载字体ttf（换成你自己的字体库路径）
		//$font = realpath('font/font.ttf');//加载字体ttf（针对laravel框架本地运行无法直接引入时请使用此函数，将字体文件放在根目录（pulic目录）即可）
        $img = imagecreatefrompng($img);// 加载背景图

        #imagecolorallocate(参数A:背景图的路径,参数B:RGB颜色参数1,参数C:RGB颜色参数2,参数D:RGB颜色参数3)
        #蓝色的RGB值为：（24, 165, 234）
        $color = imagecolorallocate($img, 24, 165, 234);//设置字体颜色，给你想打印在图片上的文字设置一个你喜欢的字体颜色
        $x = 0;//首个字的x轴横坐标
        $y = 30;//首个字的y轴纵坐标

        //将指定中文字符写在背景图片上
        foreach ($text as $k => $v) {
            #imagettftext(参数A:背景图路径,参数B:字体大小,参数C:文字角度0标识从左到右读的文本,参数D:首个文字在背景图上的横坐标,参数E:首个文字在背景图上的纵坐标,参数F:文字的颜色值,参数G:字体库路径,参数H:需要写在图上的文字,)
            imagettftext($img, $size, 0, $x, $y, $color, $font, $v);//在背景图上循环添加文字
            $x = $x + 50;//增加横坐标来做到间距的效果，没有这个参数打印出来的字会重叠在一起！
        }

        //将指定英文字符写在背景图片上
        $x1 = 0;
        $y1 = 60;
        foreach ($code as $k => $v) {
            imagettftext($img, 20, 0, $x1, $y1, $color, $font, $v);//循环添加文字
            $x1 = $x1 + 30;//增加横坐标来做到间距的效果
        }

        $fileName = rand(111, 222) . time() . ".png";//定义图片名
        print_r('https://xcx.xxx.com/test/' . $fileName);

        #imagepng() 注意这个函数，我的背景图是.png格式且我最后想的到的也是.png格式的图，所以
        #我使用这个函数，如果你想要其他格式的图片你还可以参见 imagegif()，imagejpeg()等
        $url = imagepng($img, "test/" . $fileName);//保存生成好的图片到本地

        //拓展：图片的旋转
        $img2 = imagecreatefrompng('test/' . $fileName);// 加载已有图像
        $rotate = imagerotate($img2, 90, 0);
        imagepng($rotate, 'test/' . mt_rand(333, 555) . 'rotate.png');//保存生成好的图片到本地
        print_r([$rotate, $url]);
    }

createImage();

?>
