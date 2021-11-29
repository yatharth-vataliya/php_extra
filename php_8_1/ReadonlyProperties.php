<?php

class BlogData {

    public $name = "Yatharth Vataliya";

    public $anyValue = NULL;

    public function __construct(){
        echo __CLASS__." <br/>".PHP_EOL;
    }

}

class UseBlog {

    // public readonly BlogData $blogData; // use can write readonly variable like this and assign it once.

    public function __construct(public readonly BlogData $blogData){ // this syntax called property promotion is also worked with readonly type
        // $this->blodData = $blogData;
    }

    public function getBlogData() : BlogData {
        return $this->blogData;
    }

}

$useBlog = new UseBlog((new BlogData()));

// $useBlog->blogData = NULL; // this statement will gives fatal error because readonly property can't reinitialize or edit it's content;

$blogData = $useBlog->getBlogData();

echo $blogData->name;

echo "<br/>".PHP_EOL;

$blogData->name = "Kalpana"; // Here you can see we can assing new value to readonly variables object key. so we can say that readonly variable is only one time initialization. It the variable is object of other class then property of object is mutable and the varible that we define as readonly is only immutable;

echo $blogData->name;