<?php
/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 2018-09-28
 * Time: 1:56
 */

namespace frontend\widgets\tag;

use common\models\TagModel;
use Yii;
use yii\base\Widget;

class TagWidget extends Widget
{
    public $title = '';

    public $limit = 20;

    public function run()
    {
        $res = TagModel::find()
            ->orderBy(['post_num'=>SORT_DESC])
            ->limit($this->limit)
            ->all();

        $result['title'] = $this->title ? : '标签云';
        $result['body'] = $res ? : [];

        return $this->render('index', ['data' => $result]);
    }
}