<?php
/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 2018-09-23
 * Time: 18:59
 */

namespace frontend\controllers\base;

/**
 * 基础控制器
 */
use yii\web\Controller;

class BaseController extends Controller
{
    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }
        return true;
    }
}