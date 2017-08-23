<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Value */

$this->title = 'Update Value: ' . $model->project_id;
$this->params['breadcrumbs'][] = ['label' => 'Values', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->project_id, 'url' => ['view', 'project_id' => $model->project_id, 'output_id' => $model->output_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="value-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
