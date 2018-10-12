<?php
/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 2018-09-27
 * Time: 0:43
 */

namespace frontend\models;
use yii\base\Model;
use yii\validators\Validator;

class GoodForm extends Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [
            [['username','password'], 'required'],
        ];
    }

}