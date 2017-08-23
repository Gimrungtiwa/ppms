<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Qalevelhasproject */

$this->title = 'Update Qalevelhasproject: ' . $model->qa_level_id;
$this->params['breadcrumbs'][] = ['label' => 'Qalevelhasprojects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->qa_level_id, 'url' => ['view', 'qa_level_id' => $model->qa_level_id, 'project_id' => $model->project_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="qalevelhasproject-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
