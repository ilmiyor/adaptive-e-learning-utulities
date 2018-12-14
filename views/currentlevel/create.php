<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Currentlevel */

$this->title = 'Create Currentlevel';
$this->params['breadcrumbs'][] = ['label' => 'Currentlevels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="currentlevel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
