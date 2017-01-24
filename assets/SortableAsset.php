<?php

namespace knik\sortable\assets;

use yii\web\AssetBundle;

class SortableAsset extends AssetBundle
{
    public $sourcePath = '@vendor/knik/yii2-sortable-widgets/assets/files';

    public $js = [
        'js/sortable-widgets.js',
    ];

    public $css = [
        'css/sortable-widgets.css',
    ];

    public $depends = [
        'knik\sortable\assets\RubaxaAsset',
    ];
}
