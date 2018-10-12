<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    // 开启中文显示
    'language' => 'zh-CN',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],

        'user' => [
            'identityClass' => 'common\models\UserModel',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],

        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],

        // 配置语言包
        'i18n'  => [
            'translations' => [
                "*" => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    // 语言包路径指向
                    // 'basePath' => '/messages',
                    'fileMap' => [
                        'common' => 'common.php',
                    ],
                ],
            ],
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            // 路由美化开关
            'enablePrettyUrl' => true,
            // 关闭脚本文件
            'showScriptName' => false,
            // 后缀
            'suffix' => '',
            'rules' => [
            ],
        ],

    ],
    'params' => $params,
];
