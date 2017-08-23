<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\QaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Qas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Qa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'qa_lavel_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
