<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Qalevelhasproject */

$this->title = 'Create Qalevelhasproject';
$this->params['breadcrumbs'][] = ['label' => 'Qalevelhasprojects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qalevelhasproject-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
