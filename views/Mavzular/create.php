<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Mavzular */

$this->title = 'Create Mavzular';
$this->params['breadcrumbs'][] = ['label' => 'Mavzulars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mavzular-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
