<?php

// PHP < 8.2

final class Status {}

class BlogData
{
    public readonly string $title;

    public readonly Status $status;

    public function __construct(string $title, Status $status)
    {
        echo __CLASS__.'Before php8.2';
        $this->title = $title;
        $this->status = $status;
    }
}

$blogData = new BlogData(
    title: 'php_extra',
    status: new Status
);
// $blogData->title = "New title"; // this will throw Fatal error.

// PHP 8.2

readonly class BlogData1
{
    public string $title;

    public Status $status;

    public function __construct(string $title, Status $status)
    {
        echo __CLASS__.'In php8.2';
        $this->title = $title;
        $this->status = $status;
    }
}

$blogData1 = new BlogData1(
    title: 'php_extra',
    status: new Status
);

// $blogData1->title = "new title"; // this will throw Fatal error
