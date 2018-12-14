<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fanlar */

$this->title = 'Update Fanlar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'Fan_nomi' => $model->Fan_nomi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fanlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
