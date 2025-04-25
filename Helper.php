<?php

namespace App\Core;

class Helper
{
    public const JUST_ONE = 100;

    public const JUST_TWO = 100;

    public function display_()
    {
        echo 'this is from '.__FILE__;
    }

    public static function just_dir()
    {
        echo '<pre>';
        var_dump(scandir(__DIR__));
        echo '</pre>';
    }
}
