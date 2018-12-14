<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ichkiMavzular */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ichki-mavzular-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Ichki_mavzu_nomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QValue')->textInput(['value' => '70']) ?>

    <?= $form->field($model, 'Mavzular_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fanlar_ichki_mavzular_id')->textInput(['maxlength' => true, 'value' => 'Math']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
