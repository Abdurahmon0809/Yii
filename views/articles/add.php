<?php

use app\models\Article;
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

/** @var Article $model */
?>

<?php $form = ActiveForm::begin(["options" => ["class" => "mt-4"]]) ?>
<?= $form->field($model, "header", ["options" => ["class" => "w-25", "style" => "margin-left:390px;"]]) ?>
<?= $form->field($model, "article", ["options" => ["class" => "mx-auto mt-4", "style" => "width:30%;"]])->textarea() ?>
<?= Html::submitButton("Создать статью", ["class" => "btn btn-success mt-4", "style" => "margin-left:390px;"]) ?>
<?php ActiveForm::end() ?>
