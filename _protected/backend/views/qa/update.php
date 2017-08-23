<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Qa */

$this->title = 'Update Qa: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Qas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="qa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
