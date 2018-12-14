<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\Ichki_mavzularSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ichki Mavzulars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ichki-mavzular-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ichki Mavzular', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Ichki_mavzu_nomi',
            'QValue',
            'Mavzular_id',
            'Fanlar_ichki_mavzular_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
