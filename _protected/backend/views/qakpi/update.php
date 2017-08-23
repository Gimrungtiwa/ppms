<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Qakpi */

$this->title = 'Update Qakpi: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Qakpis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="qakpi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
