<?php

/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="form">
    <div class="form__wrapper">
        <h1 class="titles">⫎<?= $this->title ?>⫍</h1>

        <?php $form = ActiveForm::begin(['class' => 'form', 'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'lb'],
            'inputOptions' => ['class' => 'input'],
            'errorOptions' => ['class' => 'error']
        ]]) ?>

        <?= $form->field($model, 'songname')->textInput() ?>
        <?= $form->field($model, 'authore')->textInput() ?>
        <?= $form->field($model, 'ganre')->dropDownList([
            'classic' => 'Классическая музыка',
            'rok' => 'Рок',
            'shanson' => 'Шансон',
            'gazz' => 'Джаз',
            'bluz' => 'Блюз',
            'other' => 'Другое...'
        ]) ?>
        <?= $form->field($model, 'url')->textarea(['class' => 'input url']) ?>
        <?= Html::submitButton("Добавить", ['class' => 'sub']) ?>

        <?php ActiveForm::end() ?>
    </div>
</div>