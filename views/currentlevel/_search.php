<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CurrentlevelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="currentlevel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'uid') ?>

    <?= $form->field($model, 'sid') ?>

    <?= $form->field($model, 'tid') ?>

    <?= $form->field($model, 'tl') ?>

    <?= $form->field($model, 'stid') ?>

    <?php // echo $form->field($model, 'stl') ?>

    <?php // echo $form->field($model, 'sto') ?>

    <?php // echo $form->field($model, 'uto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
