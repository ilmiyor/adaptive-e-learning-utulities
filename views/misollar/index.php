<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MisollarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Misollars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="misollar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Misollar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Subject',
            'Theme',
            'Sub_theme',
            'Problem_given',
            //'test_type',
            //'variant1',
            //'variant2',
            //'variant3',
            //'variant4',
            //'answer',
            //'Definition',
            //'Solve',
            //'Weight',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
