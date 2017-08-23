<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Qalevelhasproject */

$this->title = $model->qa_level_id;
$this->params['breadcrumbs'][] = ['label' => 'Qalevelhasprojects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qalevelhasproject-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'qa_level_id' => $model->qa_level_id, 'project_id' => $model->project_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'qa_level_id' => $model->qa_level_id, 'project_id' => $model->project_id], [
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
            'qa_level_id',
            'project_id',
        ],
    ]) ?>

</div>
