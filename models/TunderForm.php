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
            [['songname', 'authore', 'ganre', 'url'], 'required'],
            ['url', 'url']
        ];
    }


    public function attributeLabels()
    {
        return [
            'songname' => 'Название песни',
            'authore' => 'Автор',
            'ganre' => 'Жанр',
            'url' => 'Ссылка на песню'
        ];
    }
}
