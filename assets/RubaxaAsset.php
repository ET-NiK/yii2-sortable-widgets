<?php

namespace knik\sortable\assets;

use yii\web\AssetBundle;

class RubaxaAsset extends AssetBundle
{
    public $sourcePath = '@vendor/knik/yii2-sortable-widgets/assets/files';

    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/Sortable/1.2.1/Sortable.js',
        'js/jquery.binding.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
