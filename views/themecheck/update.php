<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Themecheck */

$this->title = 'Update Themecheck: ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Themechecks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="themecheck-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
