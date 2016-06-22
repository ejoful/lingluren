<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
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
