<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'purpose')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'objective')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'benefit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_start')->textInput() ?>

    <?= $form->field($model, 'date_end')->textInput() ?>

    <?= $form->field($model, 'plan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_start_plan')->textInput() ?>

    <?= $form->field($model, 'date_end_plan')->textInput() ?>

    <?= $form->field($model, 'do')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_start_do')->textInput() ?>

    <?= $form->field($model, 'date_end_do')->textInput() ?>

    <?= $form->field($model, 'check')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_start_check')->textInput() ?>

    <?= $form->field($model, 'date_end_check')->textInput() ?>

    <?= $form->field($model, 'action')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_start_action')->textInput() ?>

    <?= $form->field($model, 'date_endt_action')->textInput() ?>

    <?= $form->field($model, 'amout')->textInput() ?>

    <?= $form->field($model, 'project_type_id')->textInput() ?>

    <?= $form->field($model, 'budgets_year_id')->textInput() ?>

    <?= $form->field($model, 'budget_source_id')->textInput() ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'project_status_id')->textInput() ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
