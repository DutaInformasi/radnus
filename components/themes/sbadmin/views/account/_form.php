<?php

use app\models\RadgroupcheckExt;
use app\models\RadusergroupExt;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

$form = ActiveForm::begin([
    'type' => ActiveForm::TYPE_HORIZONTAL,
    'id' => 'form-check',
    'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL],
    'enableAjaxValidation' => true,
    'validationUrl' => Url::to(['ajax-validation'])
]);
?>
<?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'value')->passwordInput(['maxlength' => true]) ?>

<?= $form->field($model, 'attribute')->dropdownList(
    [
        'Cleartext-Password' => 'Cleartext-Password',
        'User-Password' => 'User-Password',
        'Crypt-Password' => 'Crypt-Password',
        'MD5-Password' => 'MD5-Password',
        'SHA1-Password' => 'SHA1-Password',
        'CHAP-Password' => 'CHAP-Password'
    ],
    ['style' => 'width: 200px']
) ?>

<?= $form->field($model, 'op')->dropdownList(
    [
        ':=' => ':=',
        '==' => '==',
        '!=' => '!=',
    ],
    ['style' => 'width: 100px']
) ?>

<?= $form->field($model, 'groupname')->dropdownList(
    ArrayHelper::map(
        RadgroupcheckExt::find()
            ->select('groupname, groupname')
            ->asArray()
            ->all(),
        'groupname',
        'groupname'
    ),
    ['style' => 'width: 200px']
) ?>

<?= Html::submitButton('Save', ['class' => 'btn btn-success', 'name' => 'btn-save']) ?>

<?php ActiveForm::end(); ?>