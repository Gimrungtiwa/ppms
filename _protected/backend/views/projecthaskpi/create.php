<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Projecthaskpi */

$this->title = 'Create Projecthaskpi';
$this->params['breadcrumbs'][] = ['label' => 'Projecthaskpis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projecthaskpi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
