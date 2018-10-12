<?php
/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 2018-09-24
 * Time: 19:20
 */

namespace frontend\models;


/**
 * 标签的表单模型
 * Class TagForm
 * @package frontend\models
 */
use common\models\TagModel;
use yii\base\Model;

class TagForm extends Model
{
    public $id;

    public $tags;

    public function rules()
    {
        return [
            ['tag', 'required'],
            ['tags', 'each', 'rule'=>['string']],
        ];
    }

    /**
     * 保存标签集合
     * @return array
     */
    public function saveTags()
    {
        $ids = [];

        if (!empty($this->tags)) {
            foreach ($this->tags as $tag) {
                $ids[] = $this->_saveTag($tag);
            }
        }

        return $ids;
    }

    /**
     * 保存标签
     */
    private function _saveTag($tag)
    {
        $model = new TagModel();
        $res = $model->find()->where(['tag_name'=>$tag])->one();
        if (!$res) {
            $model->tag_name = $tag;
            $model->post_num = 1;
            if (!$model->save()) {
                throw new \Exception('保存标签失败！');
            }
            return $model->id;
        } else {
            // 表数据加1
            $res->updateCounters(['post_num'=>1]);
            return $res->id;
        }
    }
}
