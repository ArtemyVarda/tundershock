<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <header>

        <div class="countainer">
            <div class="up_logo">
                <div>
                    <img class="logo" src="/images/thunder.jpg" alt="" />
                </div>
                <div class="naz">
                    <div class="first_piese">Thunder</div>
                    <div class="second_piese">Shock</div>
                </div>
            </div>
            <div class="nav">
                <div class="gor">
                    <div class="acount">
                        <?php if (Yii::$app->user->isGuest) : ?>
                            <div class="nik">Гость</div>
                        <? else :  ?> <div class="nik"><?= Yii::$app->user->identity->login ?></div>
                        <?php endif; ?>
                        <?php if (Yii::$app->user->isGuest) : ?>
                            <a class="but auth" href="/user/login">Войти</a>
                            <a class="but reg" href="/user/registration">Регестрация</a>
                        <?php else : ?>
                            <?= '<li>' .
                                Html::beginForm(['/user/logout']) .
                                Html::submitButton('Выход ', ['class' => 'but exit']) .
                                Html::endForm() .
                                '</li>'
                            ?>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="stolb_ver1">
                    <div class="ganr"></div>
                    <ul>
                        <div class="spis">Жанры музыки</div>
                        <li class="li1"><a href="/tunderlist/classic">Классическая музыка</a></li>
                        <li class="li1"><a href="/tunderlist/rok">Рок</a></li>
                        <li class="li1"><a href="/tunderlist/shanson">Шансон</a></li>
                        <li class="li1"><a href="/tunderlist/gazz">Джаз</a></li>
                        <li class="li1"><a href="/tunderlist/bluz">Блюз</a></li>
                        <li class="li1"><a href="/tunderlist/other">Другое...</a></li>
                    </ul>
                </div>
                <div class="stolb_ver2">
                    <ul>
                        <div class="spis">Навигация</div>
                        <li class="li1"><a href="/">О нас</a></li>
                        <?php if (Yii::$app->user->isGuest) : ?>
                            <li class="li1"><a href="/user/registration">Любимые песни</a></li>
                        <?php else :  ?><li class="li1"><a href="">Любимые песни</a></li>
                        <?php endif; ?>
                        <li class="li1"><a href="">Рандомные 5 песен</a></li>
                        <?php if (!Yii::$app->user->isGuest) : ?>
                            <li class="li1"><a href="/tunderlist/createmuz">Добавить музыку</a></li>
                        <?php else : ?><li class="li1"><a href="/user/login">Добавить музыку</a></li>
                        <? endif ?>
                    </ul>
                </div>
                <div class="up_logo down"></div>
    </header>

    <main>
        <div class="container">
            <?= $content ?>
        </div>
    </main>

    <footer>
        <div class=" dann">
            ©Tundershoke <?= date('Y') ?>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>