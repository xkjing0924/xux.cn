<!-- this file is download from Github,originally by xkjing0924 and the site "http://xux.cn/",please save this note -->
<?php
class getTianFont{
    public $zi;
    function __construct($zi){
        $this->zi=$zi;
    }

    function say(){
        echo $this->zi;
    }

    function get_tian(){
    //$zi = "竭";
    header('Content-type: image/png');
    $font = '全新硬笔楷书简.ttf';
    $image = imagecreate( 400, 400 );
    $red = imagecolorallocate($image, 200,200,200);
    $blue = imagecolorallocate($image, 0,0,0 );
    //$zi = $_GET['x'];
    imageTTFtext($image, 260, 0, 20, 300, $blue, $font, $this->zi );
    imagepng($image);
    imagedestroy($image);
    //imagettftext ( resource $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string$text ) : array
    }    
}

$zi = $_GET['zi'];
//$zi = "甜";
$obj = new getTianFont($zi);
$obj->get_tian();

?>
