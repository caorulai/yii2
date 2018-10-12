<?php
/**
 * Created by PhpStorm.
 * User: buddha
 * Date: 2018-09-27
 * Time: 0:33
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(['id'=>'login-form']); ?>
    <?= $form->field($model, 'username')->textInput(); ?>
    <?= $form->field($model, 'password')->passwordInput(); ?>
    <div class="form-group">
        <?=Html::submitButton('login'); ?>
    </div>

<?php ActiveForm::end(); ?>
