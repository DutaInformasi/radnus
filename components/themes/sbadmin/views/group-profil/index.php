<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\RadgroupreplyExtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Radgroupreply Exts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radgroupreply-ext-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Radgroupreply Ext', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            'id',
            'groupname',
            'attribute',
            'op',
            'value',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>


</div>
