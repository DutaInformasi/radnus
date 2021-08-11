<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\NasExtSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nas-ext-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nasname') ?>

    <?= $form->field($model, 'shortname') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'ports') ?>

    <?php // echo $form->field($model, 'secret') ?>

    <?php // echo $form->field($model, 'server') ?>

    <?php // echo $form->field($model, 'community') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
