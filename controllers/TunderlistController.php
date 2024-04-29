<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\TunderForm;
use app\repository\TunderRepository;

class TunderlistController extends Controller
{
    public function actionAboutus()
    {
        return $this->render('aboutus');
    }
    public function actionCreatemuz()
    {
        $this->view->title = 'Добавление музыки';
        $model = TunderForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            TunderRepository::createSong(
                $model->songname,
                $model->authore,
                $model->ganre,
                $model->url
            );
            return $this->goHome();
        }
        return $this->render("createmuz", [
            'model' => $model
        ]);
    }
}
