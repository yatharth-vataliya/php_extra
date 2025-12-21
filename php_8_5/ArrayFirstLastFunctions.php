<?php

// Before PHP 8.5

$events = ['public', 'static', 'void', 'main'];

$lastEvent = $events === []
    ? null
    : $events[array_key_last($events)];

// or 

$eventCounts = count($events);
$secondLast = $eventCounts > 0 ? $events[$eventCounts - 2] : null;

var_dump('second last Event ', $secondLast);

// IN PHP 8.5

$lastEvent = array_last($events);
$firstEvent = array_first($events);

var_dump($lastEvent, $firstEvent);

/*
 *The array_first() and array_last() functions return the first or last value of an array, respectively.
 *If the array is empty, null is returned (making it easy to compose with the ?? operator).
*/
