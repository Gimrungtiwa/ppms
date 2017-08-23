<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'place') ?>

    <?= $form->field($model, 'purpose') ?>

    <?php // echo $form->field($model, 'objective') ?>

    <?php // echo $form->field($model, 'benefit') ?>

    <?php // echo $form->field($model, 'date_start') ?>

    <?php // echo $form->field($model, 'date_end') ?>

    <?php // echo $form->field($model, 'plan') ?>

    <?php // echo $form->field($model, 'date_start_plan') ?>

    <?php // echo $form->field($model, 'date_end_plan') ?>

    <?php // echo $form->field($model, 'do') ?>

    <?php // echo $form->field($model, 'date_start_do') ?>

    <?php // echo $form->field($model, 'date_end_do') ?>

    <?php // echo $form->field($model, 'check') ?>

    <?php // echo $form->field($model, 'date_start_check') ?>

    <?php // echo $form->field($model, 'date_end_check') ?>

    <?php // echo $form->field($model, 'action') ?>

    <?php // echo $form->field($model, 'date_start_action') ?>

    <?php // echo $form->field($model, 'date_endt_action') ?>

    <?php // echo $form->field($model, 'amout') ?>

    <?php // echo $form->field($model, 'project_type_id') ?>

    <?php // echo $form->field($model, 'budgets_year_id') ?>

    <?php // echo $form->field($model, 'budget_source_id') ?>

    <?php // echo $form->field($model, 'product_id') ?>

    <?php // echo $form->field($model, 'project_status_id') ?>

    <?php // echo $form->field($model, 'employee_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
