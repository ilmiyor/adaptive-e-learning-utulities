<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Misollar */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Misollars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="misollar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'Subject' => $model->Subject, 'Theme' => $model->Theme, 'Sub_theme' => $model->Sub_theme], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'Subject' => $model->Subject, 'Theme' => $model->Theme, 'Sub_theme' => $model->Sub_theme], [
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
            'Subject',
            'Theme',
            'Sub_theme',
            'Problem_given',
            'test_type',
            'variant1',
            'variant2',
            'variant3',
            'variant4',
            'answer',
            'Definition',
            'Solve',
            'Weight',
        ],
    ]) ?>

</div>
