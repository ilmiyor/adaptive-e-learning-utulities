<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CurrentlevelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Currentlevels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="currentlevel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Currentlevel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uid',
            'sid',
            'tid',
            'tl',
            'stid',
            //'stl',
            //'sto',
            //'uto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
