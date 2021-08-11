<?php

use kartik\form\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin([
    'type' => ActiveForm::TYPE_HORIZONTAL,
    'id' => 'form-check',
    'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL],
    //'enableAjaxValidation' => true,
    //'validationUrl' => Url::to(['ajax-validation-jenis-kkn'])
]);
?>

<?= $form->field($model, 'nasname')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'shortname')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'ports')->textInput() ?>

<?= $form->field($model, 'secret')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'server')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'community')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

<?= Html::submitButton('Save', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>

<?php ActiveForm::end(); ?>