<?php

use app\models\User;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var User $user */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            <?php foreach ($user->articles as $article): ?>
                <div class="col-lg-4 mb-3">
                    <h2><?= $article->header ?></h2>

                    <p><?= $article->article ?></p>

                    <p>Автор: <?= $user->name . " " . $user->birthDay ?></p>
                        <table>
                            <tr>
                                <td>
                                    <?= Html::beginForm("/update/{$article->id}", "update", ["style" => "margin-right:8px;"]) ?>
                                    <?= Html::submitButton("Изменить", ["class" => "btn btn-primary"]) ?>
                                    <?= Html::endForm() ?>
                                </td>

                                <td>
                                    <?= Html::beginForm("/delete/{$article->id}") ?>
                                    <?= Html::submitButton("Удалить", ["class" => "btn btn-danger"]) ?>
                                    <?= Html::endForm() ?>
                                </td>
                            </tr>
                        </table>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
