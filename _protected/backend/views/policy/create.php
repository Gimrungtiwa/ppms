<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Policy */

$this->title = 'Create Policy';
$this->params['breadcrumbs'][] = ['label' => 'Policies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
