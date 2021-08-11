<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RadacctExt */

$this->title = $model->radacctid;
$this->params['breadcrumbs'][] = ['label' => 'Radacct Exts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="radacct-ext-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->radacctid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->radacctid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'radacctid',
            'acctsessionid',
            'acctuniqueid',
            'username',
            'groupname',
            'realm',
            'nasipaddress',
            'nasportid',
            'nasporttype',
            'acctstarttime',
            'acctupdatetime',
            'acctstoptime',
            'acctinterval',
            'acctsessiontime:datetime',
            'acctauthentic',
            'connectinfo_start',
            'connectinfo_stop',
            'acctinputoctets',
            'acctoutputoctets',
            'calledstationid',
            'callingstationid',
            'acctterminatecause',
            'servicetype',
            'framedprotocol',
            'framedipaddress',
        ],
    ]) ?>

</div>
