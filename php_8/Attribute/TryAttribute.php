<?php

require 'AttributeExample.php';

class TryAttribute
{
    #[AttributeExample(__CLASS__)]
    public function display(): void {}
}
