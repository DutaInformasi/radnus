<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RadacctExt */

$this->title = 'Create Radacct Ext';
$this->params['breadcrumbs'][] = ['label' => 'Radacct Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radacct-ext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
