<?php

namespace app\repository;

use app\entity\Songs;

class TunderRepository
{

    public static function createSong($songname, $authore, $ganre, $url)
    {
        $song = new Songs();
        $song->songname = $songname;
        $song->authore = $authore;
        $song->ganre = $ganre;
        $song->url = $url;
        $song->save();
    }
}
