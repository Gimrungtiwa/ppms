<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Budgetsyear */

$this->title = 'Create Budgetsyear';
$this->params['breadcrumbs'][] = ['label' => 'Budgetsyears', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="budgetsyear-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
