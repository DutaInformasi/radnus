<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-6 d-none d-lg-block"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <?php $form = ActiveForm::begin([
                'class' => 'user',
            ]); ?>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'login-button']) ?>

            <?php ActiveForm::end(); ?>
            <hr>
            <div class="text-center">
                <?= Html::a('Forgot Password?', ['/site/request-password-reset'], ['class' => 'small']) ?>
            </div>
        </div>
    </div>
</div>