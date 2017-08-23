<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Projecttype */

$this->title = 'Update Projecttype: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projecttypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="projecttype-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
