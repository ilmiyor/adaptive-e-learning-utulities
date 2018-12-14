<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ichkiMavzular */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ichki Mavzulars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ichki-mavzular-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'Ichki_mavzu_nomi' => $model->Ichki_mavzu_nomi, 'Mavzular_id' => $model->Mavzular_id, 'Fanlar_ichki_mavzular_id' => $model->Fanlar_ichki_mavzular_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'Ichki_mavzu_nomi' => $model->Ichki_mavzu_nomi, 'Mavzular_id' => $model->Mavzular_id, 'Fanlar_ichki_mavzular_id' => $model->Fanlar_ichki_mavzular_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Ichki_mavzu_nomi',
            'QValue',
            'Mavzular_id',
            'Fanlar_ichki_mavzular_id',
        ],
    ]) ?>

</div>
