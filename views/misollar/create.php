<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Misollar */

$this->title = 'Create Misollar';
$this->params['breadcrumbs'][] = ['label' => 'Misollars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="misollar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
