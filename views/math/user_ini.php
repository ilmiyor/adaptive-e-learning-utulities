<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\controllers;

$this->title = 'Almost there!';
$this->params['breadcrumbs'][] = $this->title;
$mode = array(1=>'easy', 2=>'difficult');
?>
<div class="site-get">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please, confirm that you are going to practice basic math.</p>
    <div class="participants-form">

        <?php $form = ActiveForm::begin();?>
          <?= $form->field($model, 'uid')->hiddenInput(['value' => $id])->label(false) ?>
          <?= $form->field($model, 'sid')->hiddenInput(['value' => 1])->label(false); ?>
          <?= $form->field($model, 'tid')->hiddenInput(['value' => 1])->label(false); ?>
          <?= $form->field($model, 'tl')->hiddenInput(['value' => 0])->label(false); ?>
          <?= $form->field($model, 'stid')->hiddenInput(['value' => 1])->label(false); ?>
          <?= $form->field($model, 'stl')->hiddenInput(['value' => 0])->label(false); ?>
          
          <p> I am going to learn in
          <?= $form->field($model, 'mode')->radioList($mode)->label(false); ?>
          mode. </p>
          <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']); ?>
          </div>
        <?php ActiveForm::end(); ?>

</div>
