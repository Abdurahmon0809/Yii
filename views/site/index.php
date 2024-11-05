<?php

use app\models\Article;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var Article $articles */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            <?php foreach ($articles as $article): ?>
                <div class="col-lg-4 mb-3">
                    <h2><?= $article->header ?></h2>

                    <p><?= $article->article ?></p>

                    <p>Автор: <?= $article->user->name . " " . $article->user->birthDay ?></p>

                    <?php if ($article->user->id === Yii::$app->user->id): ?>
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
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
