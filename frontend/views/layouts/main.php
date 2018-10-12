<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        // 'brandLabel' => Yii::$app->name,
        'brandLabel' => Yii::t('common', 'Blog'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    $leftMenus = [
        // ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => Yii::t('yii', 'Home'), 'url' => ['/site/index']],
        // ['label' => 'About', 'url' => ['/site/about']],
        // ['label' => Yii::t('common', 'About'), 'url' => ['/site/about']],
        // ['label' => 'Contact', 'url' => ['/site/contact']],
        // ['label' => Yii::t('common', 'Contact'), 'url' => ['/site/contact']],
        ['label' => Yii::t('common', 'Post'), 'url' => ['/post/index']],
    ];

    if (Yii::$app->user->isGuest) {
        // $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $rightMenus[] = ['label' => Yii::t('common', 'Signup'), 'url' => ['/site/signup']];
        // $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        $rightMenus[] = ['label' => Yii::t('common', 'Login'), 'url' => ['/site/login']];
    } else {
        $rightMenus[] = [
            'label' => '<img src="'.Yii::$app->params['avatar']['small'].'" style="border:#ccc solid 1px;width:32px;height:32px" alt="'.Yii::$app->user->identity->username.'">',
            // 下拉单
            'items' => [
                ['label' => '<i class="fa fa-sign-out"></i> 退出', 'url' => ['site/logout'], 'linkOptions' => ['data-method' => 'post']],
                // ['label' => '个人中心', 'url' => ['site/logout'], 'linkOptions' => ['data-method' => 'post']],
            ],
        ];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $leftMenus,
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        // 关闭过滤
        'encodeLabels' => false,
        'items' => $rightMenus,
    ]);

    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
