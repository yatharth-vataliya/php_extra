<?php

interface A
{
}
interface B
{
}

#PHP < 8.2

class Foo
{
    public function bar(mixed $entity)
    {
        if ((($entity instanceof A) && ($entity instanceof B)) || ($entity === null)) {
            return $entity;
        }

        throw new Exception('Invalid entity');
    }
}

#PHP 8.2

class Foo1
{
    public function bar((A&B)|null $entity)
    {
        return $entity;
    }
}

/*
 *
 * DNF types allow us to combine union and intersection types, 
 * following a strict rule: when combining union and intersection types, 
 * intersection types must be grouped with brackets.
 * 
 */