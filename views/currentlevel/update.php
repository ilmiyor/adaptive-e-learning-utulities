<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Currentlevel */

$this->title = 'Update Currentlevel: ' . $model->uid;
$this->params['breadcrumbs'][] = ['label' => 'Currentlevels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uid, 'url' => ['view', 'id' => $model->uid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="currentlevel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
