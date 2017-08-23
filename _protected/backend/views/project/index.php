<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'no',
            'name',
            'place:ntext',
            'purpose:ntext',
            // 'objective:ntext',
            // 'benefit:ntext',
            // 'date_start',
            // 'date_end',
            // 'plan:ntext',
            // 'date_start_plan',
            // 'date_end_plan',
            // 'do:ntext',
            // 'date_start_do',
            // 'date_end_do',
            // 'check:ntext',
            // 'date_start_check',
            // 'date_end_check',
            // 'action:ntext',
            // 'date_start_action',
            // 'date_endt_action',
            // 'amout',
            // 'project_type_id',
            // 'budgets_year_id',
            // 'budget_source_id',
            // 'product_id',
            // 'project_status_id',
            // 'employee_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
