<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Strategic */

$this->title = 'Create Strategic';
$this->params['breadcrumbs'][] = ['label' => 'Strategics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="strategic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
