<?php
/**
 * Created by PhpStorm.
 * User: sweet
 * Date: 2015/7/2
 * Time: 16:58
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Class XenonAsset
 * @package frontend\assets
 */
class XenonAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fonts/linecons/css/linecons.css',
        'fonts/fontawesome/css/font-awesome.min.css',
        'css/Xenon/xenon-core.css',
        'css/Xenon/xenon-forms.css',
        'css/Xenon/xenon-components.css',
        'css/Xenon/xenon-skins.css',
        'css/Xenon/custom.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
    ];
}