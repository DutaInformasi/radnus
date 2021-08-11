<?php

use kartik\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RadusergroupExtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Group User';
$this->params['breadcrumbs'][] = $this->title;

$js = <<< JS
    $(".btn-fresh").click(function(){
        $.pjax.reload({container:'#grid_container'});
    });
JS;
$this->registerJs($js, \yii\web\View::POS_READY);
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'pjax' => true,
    'pjaxSettings' => [
        'neverTimeout' => true,
        'options' => [
            'id' => 'grid_container',
        ],
    ],
    'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
    'headerRowOptions' => ['class' => 'kartik-sheet-style'],
    'filterRowOptions' => ['class' => 'kartik-sheet-style'],
    'responsiveWrap' => false,
    'toolbar' =>  [
        [
            'content' =>
            Html::a('Add Router', ['create'], [
                'class' => 'btn btn-success',
                'title' => 'Tambah Data',
                'data-pjax' => 0
            ]) . ' ' .
                Html::button('<i class="fas fa-redo"></i> Refresh', [
                    'class' => 'btn btn-danger btn-fresh',
                    'title' => 'Refresh',
                ]),
            'options' => ['class' => 'btn-group mr-2']
        ],
    ],
    'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => Html::encode($this->title),
    ],
    'columns' => [
        ['class' => 'kartik\grid\SerialColumn'],

        'username',
        'groupname',
        'priority',
        ['class' => 'kartik\grid\ActionColumn'],
    ],
]); ?>