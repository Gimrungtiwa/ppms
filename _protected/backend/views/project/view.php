<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Project */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'no',
            'name',
            'place:ntext',
            'purpose:ntext',
            'objective:ntext',
            'benefit:ntext',
            'date_start',
            'date_end',
            'plan:ntext',
            'date_start_plan',
            'date_end_plan',
            'do:ntext',
            'date_start_do',
            'date_end_do',
            'check:ntext',
            'date_start_check',
            'date_end_check',
            'action:ntext',
            'date_start_action',
            'date_endt_action',
            'amout',
            'project_type_id',
            'budgets_year_id',
            'budget_source_id',
            'product_id',
            'project_status_id',
            'employee_id',
        ],
    ]) ?>

</div>
