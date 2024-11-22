<?php

// Before PHP 8.4

class PhpVersion
{
    /**
     * @deprecated 8.3 use PhpVersion::getVersion() instead
     */
    public function getPhpVersion(): string
    {
        return $this->getVersion();
    }

    public function getVersion(): string
    {
        return '8.3';
    }
}

$phpVersion = new PhpVersion;
// No indication that the method is deprecated.
echo $phpVersion->getPhpVersion();

// IN PHP 8.4

class PhpVersionNew
{
    #[\Deprecated(
        message: 'use PhpVersion::getVersion() instead',
        since: '8.4',
    )]
    public function getPhpVersion(): string
    {
        return $this->getVersion();
    }

    public function getVersion(): string
    {
        return '8.4';
    }
}

$phpVersionNew = new PhpVersionNew;
// Deprecated: Method PhpVersion::getPhpVersion() is deprecated since 8.4, use PhpVersion::getVersion() instead
echo $phpVersionNew->getPhpVersion();
