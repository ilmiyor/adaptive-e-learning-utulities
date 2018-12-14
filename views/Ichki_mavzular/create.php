<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\ichkiMavzular */

$this->title = 'Create Ichki Mavzular';
$this->params['breadcrumbs'][] = ['label' => 'Ichki Mavzulars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ichki-mavzular-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
