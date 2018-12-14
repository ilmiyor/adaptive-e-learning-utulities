<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mavzular */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mavzular-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Mavzu_nomi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fanlar_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rule')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pass')->passwordInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
