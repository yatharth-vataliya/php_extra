<?php

// PHP < 8.2

class Falsy
{
    public function almostFalse(): bool
    {
        return false;
    }

    public function almostTrue(): bool
    {
        return true;
    }

    public function almostNull(): ?string
    {
        return null;
    }
}

// PHP 8.2

class Falsy1
{
    public static function alwaysFalse(): false
    {
        return false;
    }

    public function alwaysTrue(): true
    {
        return true;
    }

    public function alwaysNull(): null
    {
        return null;
    }
}

echo (new Falsy1)->alwaysFalse();
