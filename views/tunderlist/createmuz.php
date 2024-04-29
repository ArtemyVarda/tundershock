<?php

/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="form">
    <div class="form__wrapper">
        <h1><?= $this->title ?></h1>

        <?php $form = ActiveForm::begin(['class' => 'form', 'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'lb'],
            'inputOptions' => ['class' => 'input'],
            'errorOptions' => ['class' => 'error']
        ]]) ?>

        <?= $form->field($model, 'songname')->textInput() ?>
        <?= $form->field($model, 'authore')->textInput() ?>
        <?= $form->field($model, 'ganre')->textInput() ?>
        <?= $form->field($model, 'url')->textarea() ?>
        <?= Html::submitButton("Добавить", ['class' => 'sub']) ?>

        <?php ActiveForm::end() ?>
    </div>
</div>