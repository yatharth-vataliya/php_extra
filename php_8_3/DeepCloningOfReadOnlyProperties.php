<?php

// Before PHP 8.3

class PHP {
    public string $version = '8.2';
}

readonly class Foo {
    public function __construct(
        public PHP $php
    ) {}

    public function __clone(): void {
        $this->php = clone $this->php;
    }
}

$instance = new Foo(new PHP());
$cloned = clone $instance;

// Fatal error: Cannot modify readonly property Foo::$php

// IN PHP 8.3

class PHP3 {
    public string $version = '8.2';
}

readonly class Foo3 {
    public function __construct(
        public PHP3 $php
    ) {}

    public function __clone(): void {
        $this->php = clone $this->php;
    }
}

$instance = new Foo3(new PHP3());
$cloned = clone $instance;

$cloned->php->version = '8.3';