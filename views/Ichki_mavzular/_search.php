<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Ichki_mavzularSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ichki-mavzular-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Ichki_mavzu_nomi') ?>

    <?= $form->field($model, 'QValue') ?>

    <?= $form->field($model, 'Mavzular_id') ?>

    <?= $form->field($model, 'Fanlar_ichki_mavzular_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
