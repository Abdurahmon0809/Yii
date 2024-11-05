<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url;

$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>
    <h2><?= Html::encode($this->title) ?></h2>

    <!--    <p>Please fill out the following fields to login:</p>-->
<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

<?= $form->field($model, 'name', ["options" => ["class" => "w-25 mx-auto"]])->textInput(['autofocus' => true]) ?>
<?= $form->field($model, 'password', ["options" => ["class" => "w-25 mx-auto mt-4"]])->passwordInput() ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success', "style" => "width:25%", 'name' => 'login-button']) ?>
<?php ActiveForm::end(); ?>
<em>Нет аккаунта <?= Html::a("зарегистрироваться", "register") ?></em>
