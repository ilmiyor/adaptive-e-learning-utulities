<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MisollarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="misollar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Subject') ?>

    <?= $form->field($model, 'Theme') ?>

    <?= $form->field($model, 'Sub_theme') ?>

    <?= $form->field($model, 'Problem_given') ?>

    <?php // echo $form->field($model, 'test_type') ?>

    <?php // echo $form->field($model, 'variant1') ?>

    <?php // echo $form->field($model, 'variant2') ?>

    <?php // echo $form->field($model, 'variant3') ?>

    <?php // echo $form->field($model, 'variant4') ?>

    <?php // echo $form->field($model, 'answer') ?>

    <?php // echo $form->field($model, 'Definition') ?>

    <?php // echo $form->field($model, 'Solve') ?>

    <?php // echo $form->field($model, 'Weight') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
