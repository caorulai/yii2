<?php
/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 2018-09-27
 * Time: 0:31
 */

namespace frontend\controllers;
use frontend\models\GoodForm;
use Yii;
use frontend\controllers\base\BaseController;

class GoodController extends BaseController
{
    public function actionIndex()
    {
        $model = new GoodForm();
        if (Yii::$app->request->post() && $model->validate()) {

        }
        return $this->render('index', ['model'=>$model]);
    }
}
