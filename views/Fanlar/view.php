<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fanlar */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Fanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fanlar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'Fan_nomi' => $model->Fan_nomi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'Fan_nomi' => $model->Fan_nomi], [
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
            'Fan_nomi',
        ],
    ]) ?>

</div>
