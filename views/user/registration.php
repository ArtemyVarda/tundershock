<?php

/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<body>
    <h1 class="titles">⫎<?= $this->title ?>⫍</h1>
    <?php $form = ActiveForm::begin([
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'lb'],
            'inputOptions' => ['class' => 'input'],
            'errorOptions' => ['class' => 'error']
        ]
    ]); ?>


    <body>

        </div>
        <div>
            <?= $form->field($model, 'login')->textInput() ?>
        </div>
        <div>
            <?= $form->field($model, 'password')->passwordInput() ?>
        </div>
        <div>
            <?= $form->field($model, 'passwordRepeat')->passwordInput() ?>
        </div>
        <?= Html::submitButton('Регистрация', ['class' => 'sub']) ?>
        <?php ActiveForm::end(); ?>
        </div>
    </body>
</body>