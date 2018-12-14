<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\ContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'event') ?>

    <?= $form->field($model, 'slide_order') ?>

    <?= $form->field($model, 'dimension') ?>

    <?= $form->field($model, 'slide_title') ?>

    <?php // echo $form->field($model, 'slide_desctiption') ?>

    <?php // echo $form->field($model, 'text_column') ?>

    <?php // echo $form->field($model, 'graph_column') ?>

    <?php // echo $form->field($model, 'variant_content') ?>

    <?php // echo $form->field($model, 'dependent') ?>

    <?php // echo $form->field($model, 'slide_type') ?>

    <?php // echo $form->field($model, 'test_number') ?>

    <?php // echo $form->field($model, 'test_content') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
