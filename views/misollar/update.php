<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Misollar */

$this->title = 'Update Misollar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Misollars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'Subject' => $model->Subject, 'Theme' => $model->Theme, 'Sub_theme' => $model->Sub_theme]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="misollar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
