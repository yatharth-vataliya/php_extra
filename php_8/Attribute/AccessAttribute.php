<?php

require "TryAttribute.php";

$reflectionClass = new ReflectionClass(TryAttribute::class);

$reflectionMethods = $reflectionClass->getMethods();
$reflectionAttribute = $reflectionMethods[0]->getAttributes()[0];

$reflectionAttribute->newInstance();