<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
<div class="banner-wrap top-banner">
	<div class="banner-mask">
		<ul class="banner-list">
		<?php 
             $li_str = '';
             $slide_str = '';
             foreach($slides as $key => $value) {
                	if ($key == 0) {
                			$li_str .= "<li class='cur'></li>";
                	} else {
                			$li_str .= "<li></li>";
                	}
                	$slide_str .= '<li><a href="' .$value->url .'">';
            		$slide_str .= '<img src="' . Url::to('@web/' . $value->path, true) . '"/></a></li>';
             }
             echo $slide_str;
          ?>
           </ul>
           <a class="arrow left" ></a>
           <a class="arrow right"></a>
    </div>
    <ul class="pagination"><?= $li_str ?></ul>
</div>

<div class="tab js_plugin" id="namespace_1" data-pid="2">
	<div class="tab_hd">
		<div class="tab_hd_inner">
			<div type="index" data-index="0" class="item active">领路指南</div>
			<div type="index" data-index="1" class="item">学习经验</div>
			<div type="index" data-index="2" class="item">报考常识</div>
		</div>
	</div>
        <?= $content ?>
</div>
<div class="tab_bd">
<div class="article_list article_list_0">
		<?php 
		$str = '';
			foreach($list0 as $value) {
				$str .= "<a class='list_item js_post' href='$value->url'>";
				$str .= "<div class='cover'>";
				$str .= "<img class='img js_img' src='" . Url::to('@web/' . $value->path, true) . "'>";
				$str .= "</div>";
				$str .= "<div class='cont'>";
				$str .= "<h2 class='title js_title'>$value->title</h2>";
				$str .= "<p class='desc'>$value->des</p>";
				$str .= "</div>";
				$str .= "</a>";
			}
		echo $str;
		?>
	</div>
	<div class="article_list article_list_1" style="display: none;">
		<?php 
		$str = '';
			foreach($list1 as $value) {
				$str .= "<a class='list_item js_post' href='$value->url'>";
				$str .= "<div class='cover'>";
				$str .= "<img class='img js_img' src='" . Url::to('@web/' . $value->path, true) . "'>";
				$str .= "</div>";
				$str .= "<div class='cont'>";
				$str .= "<h2 class='title js_title'>$value->title</h2>";
				$str .= "<p class='desc'>$value->des</p>";
				$str .= "</div>";
				$str .= "</a>";
			}
			echo $str;
		?>
	</div>
	<div class="article_list article_list_2" style="display: none;">
		<?php 
		$str = '';
			foreach($list2 as $value) {
				$str .= "<a class='list_item js_post' href='$value->url'>";
				$str .= "<div class='cover'>";
				$str .= "<img class='img js_img' src='" . Url::to('@web/' . $value->path, true) . "'>";
				$str .= "</div>";
				$str .= "<div class='cont'>";
				$str .= "<h2 class='title js_title'>$value->title</h2>";
				$str .= "<p class='desc'>$value->des</p>";
				$str .= "</div>";
				$str .= "</a>";
			}
			echo $str;
		?>
	</div>
</div>
