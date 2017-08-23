<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Projectstatus */

$this->title = 'Create Projectstatus';
$this->params['breadcrumbs'][] = ['label' => 'Projectstatuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projectstatus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
