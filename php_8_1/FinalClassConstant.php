<?php

class Foo
{
    public final const XX = 'foo';
}

class Bar extends Foo
{
    public const XX = 'bar'; // Fatal error. Now we can't not override constant variable that is define as final in parent class;
}

