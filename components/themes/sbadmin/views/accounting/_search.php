<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\RadacctExtSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="radacct-ext-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'radacctid') ?>

    <?= $form->field($model, 'acctsessionid') ?>

    <?= $form->field($model, 'acctuniqueid') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'groupname') ?>

    <?php // echo $form->field($model, 'realm') ?>

    <?php // echo $form->field($model, 'nasipaddress') ?>

    <?php // echo $form->field($model, 'nasportid') ?>

    <?php // echo $form->field($model, 'nasporttype') ?>

    <?php // echo $form->field($model, 'acctstarttime') ?>

    <?php // echo $form->field($model, 'acctupdatetime') ?>

    <?php // echo $form->field($model, 'acctstoptime') ?>

    <?php // echo $form->field($model, 'acctinterval') ?>

    <?php // echo $form->field($model, 'acctsessiontime') ?>

    <?php // echo $form->field($model, 'acctauthentic') ?>

    <?php // echo $form->field($model, 'connectinfo_start') ?>

    <?php // echo $form->field($model, 'connectinfo_stop') ?>

    <?php // echo $form->field($model, 'acctinputoctets') ?>

    <?php // echo $form->field($model, 'acctoutputoctets') ?>

    <?php // echo $form->field($model, 'calledstationid') ?>

    <?php // echo $form->field($model, 'callingstationid') ?>

    <?php // echo $form->field($model, 'acctterminatecause') ?>

    <?php // echo $form->field($model, 'servicetype') ?>

    <?php // echo $form->field($model, 'framedprotocol') ?>

    <?php // echo $form->field($model, 'framedipaddress') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
