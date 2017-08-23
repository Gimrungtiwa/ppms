<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Budgetsyear */

$this->title = 'Update Budgetsyear: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Budgetsyears', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="budgetsyear-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
