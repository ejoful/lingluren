<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\rbac\PhpManager;

/* @var $this yii\web\View */
/* @var $model backend\models\Slide */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slide-form">

    <?php $form = ActiveForm::begin([
        'id' => "slide_form",
        'options' => ['enctype' => 'multipart/form-data'],
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->fileInput(['accept' => "image/png,image/jpeg"]) ?>
	<p class="hint">（请上传1280x480尺寸的图片）</p>

    <?php
    // $form->field($model, 'path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
