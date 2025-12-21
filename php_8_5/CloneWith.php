<?php

// Before PHP 8.5

readonly class OriginalColor
{
    public function __construct(
        public int $red,
        public int $green,
        public int $blue,
        public int $alpha = 255,
    ) {}

    public function withAlpha(int $alpha): self
    {
        $values = get_object_vars($this);
        $values['alpha'] = $alpha;

        return new self(...$values);
    }
}

$blue = new OriginalColor(79, 91, 147);
$transparentBlue = $blue->withAlpha(128);

// IN PHP 8.5

readonly class Color
{
    public function __construct(
        public int $red,
        public int $green,
        public int $blue,
        public int $alpha = 255,
    ) {}

    public function withAlpha(int $alpha): self
    {
        return clone($this, [
            'alpha' => $alpha,
        ]);
    }
}

$blue = new Color(79, 91, 147);
$transparentBlue = $blue->withAlpha(128);

var_dump($blue);

// Or

class Engine {

    public function __construct(private(set) string $type, public string $description = '')
    {
    }
}

$engine = new Engine('Electric', 'Electric powered');

var_dump($engine);

$newEngine = clone($engine, ['description' => 'powered through hydrogen']);

var_dump($engine, $newEngine);

