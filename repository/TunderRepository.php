<?php

namespace app\repository;

use app\entity\Songs;

class TunderRepository
{
    public static function getClassic()
    {
        return Songs::find()->where(['ganre' => 'classic'])->all();
    }


    public static function createSong($songname, $authore, $ganre, $url, $nameid)
    {
        $song = new Songs();
        $song->songname = $songname;
        $song->authore = $authore;
        $song->ganre = $ganre;
        $song->url = $url;
        $song->nameid = $nameid;
        $song->save();
    }
}
