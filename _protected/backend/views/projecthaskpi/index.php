<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProjecthaskpiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projecthaskpis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projecthaskpi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Projecthaskpi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'project_id',
            'kpi_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
