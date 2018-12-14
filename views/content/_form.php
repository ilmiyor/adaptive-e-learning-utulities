<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Content */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'event')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slide_order')->textInput() ?>

    <?= $form->field($model, 'dimension')->textInput() ?>

    <?= $form->field($model, 'slide_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slide_desctiption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_column')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'graph_column')->textInput() ?>

    <?= $form->field($model, 'variant_content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dependent')->textInput() ?>

    <?= $form->field($model, 'slide_type')->textInput() ?>

    <?= $form->field($model, 'test_number')->textInput() ?>

    <?= $form->field($model, 'test_content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
