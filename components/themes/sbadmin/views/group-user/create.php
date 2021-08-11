<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RadusergroupExt */

$this->title = 'Create Radusergroup Ext';
$this->params['breadcrumbs'][] = ['label' => 'Radusergroup Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radusergroup-ext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
