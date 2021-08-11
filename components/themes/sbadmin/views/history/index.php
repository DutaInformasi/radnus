<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\RadpostauthExtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Radpostauth Exts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="radpostauth-ext-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Radpostauth Ext', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            'id',
            'username',
            'pass',
            'reply',
            'authdate',

            ['class' => 'kartik\grid\ActionColumn'],
        ],
    ]); ?>


</div>
