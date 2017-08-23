<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Projecthaskpi */

$this->title = 'Update Projecthaskpi: ' . $model->project_id;
$this->params['breadcrumbs'][] = ['label' => 'Projecthaskpis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->project_id, 'url' => ['view', 'project_id' => $model->project_id, 'kpi_id' => $model->kpi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="projecthaskpi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
