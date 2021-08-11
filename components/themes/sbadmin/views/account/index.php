<?php

use kartik\grid\GridView;
use yii\bootstrap4\Modal;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\RadcheckExtSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Account';
$this->params['breadcrumbs'][] = $this->title;
$js = <<< JS
    $(".btn-fresh").click(function(){
        $.pjax.reload({container:'#grid_container'});
    });

    $('#modalku').on('shown.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var url = button.attr('href');
        var title = button.attr('data-title');
        $('#modalContent').html('Loading content..');
        $('#modalHeader').html('<h4>'+title+'</h4>');
        $('#modalContent').load(url);

        return false;
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
            Html::a('Add Account', ['create'], [
                'class' => 'btn btn-success',
                'title' => 'Tambah Data',
                'data-pjax' => 0,
                'data-title' => 'Tambah data',
                'data-toggle' => 'modal',
                'data-target' => '#modalku',
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
        'attribute',
        'op',
        'value',
        [
            'header' => 'Group',
            'value' => function ($model) {
                return $model->group->groupname;
            },
            'mergeHeader' => true
        ],
        [
            'class' => 'kartik\grid\ActionColumn',
            'buttons' => [
                'update' => function ($url, $model) {
                    $icon = '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>';
                    $options = [
                        'data-pjax' => 0,
                        'data-title' => 'Update data',
                        'data-toggle' => 'modal',
                        'data-target' => '#modalku',
                    ];

                    return Html::a($icon, $url, $options);
                }
            ]
        ],
    ],
]); ?>
<?php

Modal::begin([
    //'closeButton' => false,
    'title' => '<div id="modalHeader"></div>',
    //'headerOptions' => ['id' => 'modalHeader'],
    'id' => 'modalku',
    //'size' => 'modal-lg',
    'options' => ['tabindex' => false],
    //'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE]
]);

echo "<div id='modalContent'> </div>";

Modal::end();

?>