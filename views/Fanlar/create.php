<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Fanlar */

$this->title = 'Create Fanlar';
$this->params['breadcrumbs'][] = ['label' => 'Fanlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fanlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
