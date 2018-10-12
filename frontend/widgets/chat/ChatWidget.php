<?php
/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 2018-09-28
 * Time: 0:51
 */

namespace frontend\widgets\chat;

/**
 * 留言板组件
 */
use frontend\models\FeedForm;
use Yii;
use yii\base\Widget;

class ChatWidget extends Widget
{
    public function run()
    {
        $feed = new FeedForm();
        $data['feed'] = $feed->getList();
        return $this->render('index', ['data' => $data]);
    }
}
