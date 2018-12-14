<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Misollar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="misollar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Subject')->textInput(['maxlength' => true, 'value' => 'Math']) ?>

    <?= $form->field($model, 'Theme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sub_theme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Problem_given')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'variant1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'variant2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'variant3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'variant4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Definition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Solve')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Weight')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
