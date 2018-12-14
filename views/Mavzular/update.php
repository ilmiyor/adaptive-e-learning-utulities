<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Mavzular */

$this->title = 'Update Mavzular: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mavzulars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'Mavzu_nomi' => $model->Mavzu_nomi, 'Fanlar_id' => $model->Fanlar_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mavzular-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
