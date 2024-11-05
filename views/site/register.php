<?php

use app\models\User;
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var User $model */
?>
<h2>Регистрация</h2>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, "name", ["options" => ["name" => "name", "class" => "w-25 mx-auto"]]) ?>
<?= $form->field($model, "birthDay", ["options" => ["name" => "birthDay", "class" => "w-25 mx-auto mt-4"]])->input("date") ?>
<?= $form->field($model, "password", ["options" => ["name" => "password", "class" => "w-25 mx-auto mt-4"]])->input("password") ?>
<?= Html::submitButton("Отправить", ["class" => "btn btn-success", "style" => "width:25%;"]) ?>
<?php ActiveForm::end(); ?>
<em style="left: 455px;">Уже есть аккаунт <?= Html::a("войти", "login") ?></em>

