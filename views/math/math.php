<?php
use yii\helpers\Json;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\controllers;
$now = date('Y-m-d H:i:s');
include('multichoice.php');
print '<p>'.$testContent->problemgiven.'</p>Weight: <b>'.$testContent->weight;
?>
<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'uid')->hiddenInput(['value' => $uid])->label(false);  ?>
<?= $form->field($model, 'graderid')->hiddenInput(['value' => $testContent->id])->label(false); ?>
<?= $form->field($model, 'timecreated')->hiddenInput(['value' => $now])->label(false); ?>
<?php if($testContent->testtype=='multichoice'){ ?>
<?= $form->field($model, 'response')->radioList($variant)->label(false); ?>
<?php } if($testContent->testtype=='open'){ ?>
<?= $form->field($model, 'response')->textInput($testContent->answer)->label(false); } ?>

  <div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']); ?>
  </div>
<?php ActiveForm::end(); ?>
