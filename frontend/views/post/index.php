<?php
/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 2018-09-23
 * Time: 19:05
 */

use frontend\widgets\hot\HotWidget;
use frontend\widgets\post\PostWidget;
use frontend\widgets\tag\TagWidget;
use yii\base\Widget;
use yii\helpers\Url;

?>
<div class="row">
    <div class="col-lg-9">
        <?=PostWidget::widget(['limit' => 10]); ?>
    </div>
    <div class="col-lg-3">
        <div class="panel">
            <?php if(!\Yii::$app->user->isGuest):?>
                <a class="btn btn-success btn-block btn-post" href="<?=Url::to(['post/create'])?>">创建文章</a>
            <?php endif;?>
        </div>

        <!-- 热门浏览 -->
        <?=HotWidget::widget(); ?>
        <!-- 标签云 -->
        <?=TagWidget::widget(); ?>
    </div>
</div>
