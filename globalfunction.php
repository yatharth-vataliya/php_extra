<?php

namespace {
    function yatharth(?string $str)
    {
        echo $str,'this is under global namespace';
    }
}

namespace Yatharth{
    function yatharth(?string $str)
    {
        echo $str,'this is under yathrth namespace';
    }

    class name
    {
        public function dream($str)
        {
            \yatharth($str);
        }
    }

    $class = new name;
    $class->dream('yatharth vataliya');
}
