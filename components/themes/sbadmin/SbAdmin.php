<?php

namespace app\components\themes\sbadmin;

use yii\web\AssetBundle;

class SbAdmin extends AssetBundle
{
    public $sourcePath;
    public $css = [
        'css/sb-admin-2.css',
    ];

    public $js = [
        'js/sb-admin-2.js',
    ];

    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        //'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}