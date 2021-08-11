<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RadgroupreplyExt */

$this->title = 'Create Radgroupreply Ext';
$this->params['breadcrumbs'][] = ['label' => 'Radgroupreply Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radgroupreply-ext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
