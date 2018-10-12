<?php
/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 2018-09-27
 * Time: 23:53
 */
namespace frontend\widgets\banner;

use Yii;
use yii\bootstrap\Widget;

class BannerWidget extends Widget
{
    public $items = [];

    public function init()
    {
        if (empty($this->items)) {
            $this->items = [
                [
                    'label' => 'demo',
                    'image_url' => '/statics/images/banner/b_0.jpg',
                    'url' => ['side/index'],
                    'html' => '',
                ],
                [
                    'label' => 'demo',
                    'image_url' => '/statics/images/banner/b_1.jpg',
                    'url' => ['side/index'],
                    'html' => '',
                    'active' => 'active',
                ],
                [
                    'label' => 'demo',
                    'image_url' => '/statics/images/banner/b_2.jpg',
                    'url' => ['side/index'],
                    'html' => '',
                ],
            ];
        }
    }

    public function run()
    {
        $data['items'] = $this->items;
        return $this->render('index', ['data'=>$data]);
    }
}