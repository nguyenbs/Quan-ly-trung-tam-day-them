<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container-fluid  ">
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <?php echo $form->field($model, 'username')->textInput(['id' => 'usename', 'placeholder' => 'Username'])->label(false) ?>

    <?php echo $form->field($model, 'password')->passwordInput(['id' => 'password', 'placeholder' => 'Password'])->label(false) ?>

    <?php echo $form->field($model, 'rememberMe')->checkbox() ?>

    <div>
        <input type="submit" value="Log in" name='login-button'/>
        <a href="#">Lost your password?</a>
        <a href="../site/signup">Signup</a>
    </div>

    <?php ActiveForm::end(); ?>
</div>
