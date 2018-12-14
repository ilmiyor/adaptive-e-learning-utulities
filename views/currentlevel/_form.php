<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Currentlevel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="currentlevel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <?= $form->field($model, 'sid')->textInput() ?>

    <?= $form->field($model, 'tid')->textInput() ?>

    <?= $form->field($model, 'tl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uto')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
