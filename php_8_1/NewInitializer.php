<?php

interface MainLogger
{
    public function logIt();
}

class NullLogger implements MainLogger
{
    public function __construct()
    {
        echo __CLASS__.'<br/>'.PHP_EOL;
    }

    public function logIt()
    {
        echo 'Logger class is '.__CLASS__.' '.PHP_EOL;
    }
}

class Logger implements MainLogger
{
    public function __construct()
    {
        echo __CLASS__.'<br/>'.PHP_EOL;
    }

    public function logIt()
    {
        echo 'Logger class is '.__CLASS__.' '.PHP_EOL;
    }
}

class Service
{
    private MainLogger $logger;

    // Objects can now be used as default parameter values, static variables, and global constants, as well as in attribute arguments.

    public function __construct(MainLogger $logger = new NullLogger) // new feature of PHP8.1. We can init default parameter using object or like new Class like syntax;
    {
        $this->logger = $logger;
    }

    public function getLogger(): MainLogger
    {
        return $this->logger;
    }
}

$service = new Service; // this is also valid

$service = new Service(new Logger); // this is also valid

$service->getLogger()->logIt();
