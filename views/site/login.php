<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><?= Yii::t('app', 'Please fill out the following fields to login:') ?></p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?=
            $form->field($model, 'rememberMe', [
                'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ])->checkbox()
            ?>

            <div style="color:#999;margin:1em 0">
                <?= Yii::t('app', 'If you forgot your password you can') ?> <?= Html::a(Yii::t('app', 'reset it'), ['site/request-password-reset']) ?>.
            </div>

            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
