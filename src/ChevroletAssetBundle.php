<?php
/**
 * Created by PhpStorm.
 * User: pomazkinis
 * Date: 30.05.2019
 * Time: 13:17
 */

namespace ispomazkin\chevrolet;

use yii\web\AssetBundle;

class ChevroletAssetBundle extends AssetBundle
{

    public $sourcePath = '@vendor/ispomazkin/yii2-chevrolet/assets';

    public $css = [
        'css/style.css'
    ];
}