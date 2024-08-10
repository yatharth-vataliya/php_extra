<?php

/*
enum Suit : string {
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}
*/ // This enum style is also valid. This style didn't contain value for it's case

// We can't give value to one enum case and left others, That is not valid. So There is enum where all case have value or no value in any case

// We can not initialize new instance of enum type classes;
// enum can contains method and that will be public, private and procted;
// enum can't extend any class and enum class can't be extended.
// enum can implements any number of interfaces;

//enum that contains values might have type declaration other wise it will throw exception

enum Suit: string
{
    case Hearts = 'Red';
    case Diamonds = 'Black';
    case Clubs = 'Green';
    case Spades = 'Yellow';
}

$suit = Suit::Hearts;  // Get enum case named Hearts;

echo $suit->name; // print the name of enum case

echo '<br/>'.PHP_EOL;

echo $suit->value; // print the value of enum case if it enum case has value

echo '<br/>'.PHP_EOL;

$suit = Suit::from('Yellow'); // This will Find out case that have value Yellow and give object for of matched enum case. This will throw error when not found matching value.

echo '<br/>'.PHP_EOL;

$suit = Suit::tryFrom('Pink'); // This tryFrom will give null if not found any matching enum case

var_dump($suit);

var_dump(Suit::cases()); // EnumClass::cases();  cases() method will list out all of the cases of enum classes

var_dump(Suit::Diamonds);

var_dump(Suit::Diamonds->value);

var_dump(Suit::class);

var_dump(Suit::Diamonds->cases());

var_dump(Suit::Diamonds->tryFrom('Red'));

var_dump(Suit::Diamonds->from('Green'));

var_dump(Suit::Diamonds->tryFrom('Nothing'));

// var_dump(Suit::Diamonds->from('Nothing')); // This will give error

