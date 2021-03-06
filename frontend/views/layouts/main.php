<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html style="-webkit-text-size-adjust: 106%; line-height: 1.50">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<style type="text/css">.slider{overflow:hidden;position:relative}.swiper{height:180px;overflow:hidden;position:relative}.swiper .item{float:left;position:relative}.swiper .item a{display:block}.swiper .item .img{display:block;width:396px;height:290px;background:center center no-repeat;background-size:cover}.swiper .item .desc{position:absolute;left:0;right:0;bottom:0;height:1.4em;font-size:23px;padding:20px 50px 15px 15px;color:#DC720F;margin:0;text-shadow:0 1px 0 rgba(0,0,0,.5);width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal}.indicator{position:absolute;right:15px;bottom:10px}.indicator a{float:left;margin-left:6px}.icon_dot{display:inline-block;vertical-align:middle;width:6px;height:6px;border-radius:3px;background-color:#d0cdd1}.icon_dot.active{background-color:#6a666f}</style><style type="text/css">.tab_hd{height:44px}.tab_hd_inner{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%;font-size:0;background-color:#f2f2f2}.tab_hd_inner .item{height:44px;line-height:44px;width:100%;-webkit-box-flex:1;-webkit-flex:1;-ms-flex:1;box-flex:1;flex:1;font-size:15px;color:#000;text-align:center;text-decoration:none;-webkit-tap-highlight-color:transparent}.tab_hd_inner .item.active{color:#21b100}.tab_hd_inner .item:active{background-color:rgba(0,0,0,.1)}.article_list{background-color:#fff}.list_item{display:block;padding:15px 15px 10px 10px;overflow:hidden;position:relative;text-decoration:none;-webkit-tap-highlight-color:transparent}.list_item:active{background-color:rgba(0,0,0,.1)}.list_item:after{content:" ";position:absolute;bottom:0;width:100%;height:1px;border-bottom:1px solid #e2e2e2;-webkit-transform-origin:0 100%;-ms-transform-origin:0 100%;transform-origin:0 100%;-webkit-transform:scaleY(.5);-ms-transform:scaleY(.5);transform:scaleY(.5);left:10px}.list_item:last-child:after{border:0}.list_item .cover{float:left;margin-right:10px}.list_item .cover .img{display:block;width:80px;height:60px}.list_item .cont{overflow:hidden}.list_item .cont .title{font-weight:400;margin:0;font-size:15px;color:#000;width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal}.list_item .cont .desc{margin:0;font-size:13px;color:#999;overflow:hidden;text-overflow:ellipsis;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;line-height:1.3}.more{text-align:center}
</style>
<link rel="stylesheet" href="./css/reset.css">
<link rel="stylesheet" href="./css/unslider.css">
<link rel="stylesheet" href="./css/index.css">
</head>
<body id="" class="zh_CN" ontouchstart="">
<?php $this->beginBody() ?>
<div class="container">
<?= $content ?>
</div>
<script src="./js/unslider-min.js"></script>

<script>
var unslider = $('.slider-bar').unslider({
    nav:false,
    arrows:false,
    autoplay:true,
    dots:true
});
unslider.on('unslider.change', function(event, index, slide) {
    $('.pagination-bar em').removeClass('current');
    $('.pagination-bar em:nth-of-type(' + (index + 1) + ')').addClass('current');
});
$('.pagination-bar em').click(function(){
    var index=$(this).index();
    $(this).addClass('current');
    $(this).siblings().removeClass('current');
    console.log((-(index*100))+"%");
    $('.unslider-wrap').animate({left:(-(index*100))+"%"});
});
$('.prev').click(function(){
    unslider.unslider('prev');
});
$('.next').click(function(){
    unslider.unslider('next');
});

$(".tab_hd_inner .item").click(function(){
	$(this).addClass('active');
	$(this).siblings().removeClass('active');
	var str = '.article_list_' + $(this).data('index');
	$(str).show();
	$(str).siblings().hide();
});

</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
