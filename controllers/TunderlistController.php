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
    public function actionClassic()
    {
        $this->layout = 'forganre';
        $this->view->title = 'Кдассическая музыка';
        return $this->render('classic');
    }
    public function actionRok()
    {
        $this->layout = 'forganre';
        $this->view->title = 'Рок';
        return $this->render('rok');
    }
    public function actionBluz()
    {
        $this->layout = 'forganre';
        $this->view->title = 'Блюз';
        return $this->render('bluz');
    }
    public function actionOther()
    {
        $this->layout = 'forganre';
        $this->view->title = 'Другое(P.S другие жанры добавим позже, а пока пусть будет здесь)';
        return $this->render('other');
    }
    public function actionGazz()
    {
        $this->layout = 'forganre';
        $this->view->title = 'Джазз';
        return $this->render('gazz');
    }
    public function actionShanson()
    {
        $this->layout = 'forganre';
        $this->view->title = 'Шансон';
        return $this->render('shanson');
    }
    public function actionCreatemuz()
    {
        $this->view->title = 'Добавление музыки';
        $model = new TunderForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            TunderRepository::createSong(
                $model->songname,
                $model->authore,
                $model->ganre,
                $model->url,
                Yii::$app->user->id
            );
            return $this->goHome();
        }
        return $this->render("createmuz", [
            'model' => $model
        ]);
    }
}
