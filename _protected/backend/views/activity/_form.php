<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Activity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_start')->textInput() ?>

    <?= $form->field($model, 'date_end')->textInput() ?>

    <?= $form->field($model, 'detail1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'amout1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'amout2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'amout3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'project_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
