<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = Yii::t('common', 'Signup');
?>
<div class="site-signup">
    <h1><?= Html::encode(Yii::t('common', 'Signup')) ?></h1>

    <p>请填写下列信息进行注册：</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rePassword')->passwordInput() ?>

                <?= $form->field($model, 'verifyCode')->widget(\yii\captcha\Captcha::className()) ?>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('common', 'Signup'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
