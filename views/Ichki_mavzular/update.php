<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ichkiMavzular */

$this->title = 'Update Ichki Mavzular: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ichki Mavzulars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'Ichki_mavzu_nomi' => $model->Ichki_mavzu_nomi, 'Mavzular_id' => $model->Mavzular_id, 'Fanlar_ichki_mavzular_id' => $model->Fanlar_ichki_mavzular_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ichki-mavzular-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
