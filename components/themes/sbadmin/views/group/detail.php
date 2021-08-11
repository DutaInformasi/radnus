<?php

use kartik\grid\GridView;

$js = <<< JS
    $(".btn-fresh").click(function(){
        $.pjax.reload({container:'#grid_detail'});
    });
JS;
$this->registerJs($js, \yii\web\View::POS_READY);
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'pjax' => true,
    'pjaxSettings' => [
        'neverTimeout' => true,
        'options' => [
            'id' => 'grid_detail',
        ],
    ],
    'columns' => [
        ['class' => 'kartik\grid\SerialColumn'],
        'groupname',
        'attribute',
        'op',
        'value',
    ],
]); ?>