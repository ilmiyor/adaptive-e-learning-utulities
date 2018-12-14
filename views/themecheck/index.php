<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ThemecheckSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Themechecks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="themecheck-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Themecheck', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uid',
            'ctid',
            'cl',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
