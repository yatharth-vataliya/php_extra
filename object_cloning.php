<?php

class Excel
{
    public $variable = 'Excel';
}
class _clone
{
    public function __construct(?Excel $excel = null)
    {
        return $excel;
    }

    public $name = 'yatharth';

    public const __YATHARTH__ = 'Nothing :)';

    public function display()
    {
        echo 'hello';
    }

    public static function static_return()
    {
        return new static(new Excel);
    }

    public function this_return()
    {
        return new $this;
    }

    public function self_return()
    {
        return new self;
    }
}
echo '<pre>';
$clone = new _clone;
echo 'normal object var_dump :- ';
var_dump($clone);
$clo = $clone;
$clo->name = 'Exec';
$cloneX = new _clone;
var_dump($cloneX);
var_dump(new _clone);
echo '<br/> after changing value of name variable to Exec through $clo instance :-';
var_dump($clone);
echo '<br/> after $clo=$clone like copy of object :- ';
var_dump($clo);
echo '<br/> after clone keyword to copy object :- ';
$clone1 = clone $clone;
var_dump($clone1);
echo '<br/><br/><br/><br/> static return :- ';
var_dump(_clone::static_return());
echo '<br/> this_return :- ';
var_dump($clone->this_return());
echo '<br/> self_return :- ';
var_dump($clone->self_return());
echo '</pre>';
$static = _clone::static_return();
var_dump($static->static_return());
echo $static->name;
$static->name = 'PHP_LARAVEL';
echo "<br/> {$static->name}";
$self = $clone->self_return();
echo '<br/>',$self->name;
