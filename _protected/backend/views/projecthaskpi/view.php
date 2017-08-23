<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Projecthaskpi */

$this->title = $model->project_id;
$this->params['breadcrumbs'][] = ['label' => 'Projecthaskpis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projecthaskpi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'project_id' => $model->project_id, 'kpi_id' => $model->kpi_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'project_id' => $model->project_id, 'kpi_id' => $model->kpi_id], [
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
            'project_id',
            'kpi_id',
        ],
    ]) ?>

</div>
