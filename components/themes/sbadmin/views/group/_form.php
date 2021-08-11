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
<?= $form->field($model, 'groupname')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'attribute')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'op')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

<?= Html::submitButton('Save', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>

<?php ActiveForm::end(); ?>