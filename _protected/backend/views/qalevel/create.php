<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Qalevel */

$this->title = 'Create Qalevel';
$this->params['breadcrumbs'][] = ['label' => 'Qalevels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qalevel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
