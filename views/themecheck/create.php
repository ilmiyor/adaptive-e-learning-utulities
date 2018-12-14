<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Themecheck */

$this->title = 'Create Themecheck';
$this->params['breadcrumbs'][] = ['label' => 'Themechecks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="themecheck-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
