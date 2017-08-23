<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Qakpi */

$this->title = 'Create Qakpi';
$this->params['breadcrumbs'][] = ['label' => 'Qakpis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qakpi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
