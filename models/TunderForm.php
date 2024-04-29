<?php

namespace app\models;

use yii\base\Model;


class TunderForm extends Model
{
    public $songname;
    public $authore;
    public $ganre;
    public $url;

    public function rules()
    {
        return [
            [['songname', 'authore', 'ganre', 'url'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'songnsme' => 'Название песни',
            'authore' => 'Автор',
            'ganre' => 'Жанр',
            'url' => 'Ссылка на песню'
        ];
    }
}
