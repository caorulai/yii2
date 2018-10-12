<?php
/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 2018-09-28
 * Time: 19:58
 */

namespace backend\assets;


use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'statics/css/font-awesome-4.4.0/css/font-awesome.css',
        'statics/css/layout.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}