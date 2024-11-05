<?php

namespace app\controllers;

use app\models\Article;
use Yii;
use yii\web\Controller;

class ArticlesController extends Controller
{
    public function actionAdd()
    {
        $model = new Article();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->author_id = Yii::$app->user->id;
            $model->save();
            return $this->goHome();
        }

        $this->view->title = 'Add Article';
        return $this->render('add', compact("model"));
    }

    public function actionUpdate($id)
    {
        $model = Article::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->update();
            return $this->goHome();
        }

        return $this->render('update', compact("model"));
    }

    public function actionDelete($id)
    {
        if (!Yii::$app->user->isGuest) {
            Article::findOne($id)->delete();
            return $this->goHome();
        }
        return $this->goHome();
    }
}