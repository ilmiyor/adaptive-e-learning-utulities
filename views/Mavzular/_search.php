<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MavzularSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mavzular-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Mavzu_nomi') ?>

    <?= $form->field($model, 'Fanlar_id') ?>

    <?= $form->field($model, 'Rule') ?>

    <?= $form->field($model, 'pass') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
