<?php
/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 2018-09-28
 * Time: 1:22
 */

namespace frontend\widgets\hot;

/**
 * 热门浏览组件
 */
use common\models\PostExtendModel;
use common\models\PostModel;
use Yii;
use yii\base\Widget;
use yii\db\Query;

class HotWidget extends Widget
{
    public $title = '';

    public $limit = 6;

    public function run()
    {
        $res = (new Query())
            ->select('a.browser, b.id, b.title')
            ->from(['a' => PostExtendModel::tableName()])
            ->join('left join',['b'=>PostModel::tableName()], 'a.post_id = b.id')
            ->where('b.is_valid='.PostModel::IS_VALID)
            ->orderBy(['browser'=>SORT_DESC, 'id'=>SORT_DESC])
            ->limit($this->limit)
            ->all();

        $result['title'] = $this->title ? : '热门浏览';
        $result['body'] = $res ? : [];

        return $this->render('index', ['data' => $result]);
    }
}