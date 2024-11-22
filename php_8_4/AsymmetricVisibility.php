<?php

// Before PHP 8.4

class PhpVersionOld
{
    private string $version = '8.3';

    public function getVersion(): string
    {
        return $this->version;
    }

    public function increment(): void
    {
        [$major, $minor] = explode('.', $this->version);
        $minor++;
        $this->version = "{$major}.{$minor}";
    }
}

$oldVersion = new PhpVersionOld();
var_dump($oldVersion->getVersion());
$oldVersion->increment();
var_dump($oldVersion->getVersion());

// IN PHP 8.4

class PhpVersion
{
    public private(set) string $version = '8.4';

    public function increment(): void
    {
        [$major, $minor] = explode('.', $this->version);
        $minor++;
        $this->version = "{$major}.{$minor}";
    }
}

$newVersion = new PhpVersion();
var_dump($newVersion->version);
$newVersion->increment();
var_dump($newVersion->version);
