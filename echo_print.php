<?php

/*
--- Difference between echo and print ---

print :- The major differences to echo are that print only accepts a single argument and always returns 1.
echo :- The major differences to print are that echo accepts an argument list and doesn't have a return value.


*/

echo 'Hello World';

echo 'print() also works without parentheses.';

echo 'This spans
multiple lines. The newlines will be
output as well';

echo "This spans\nmultiple lines. The newlines will be\noutput as well.";

echo 'escaping characters is done "Like this".';

// You can use variables inside a print statement
$foo = 'foobar';
$bar = 'barbaz';

echo "foo is $foo"; // foo is foobar

// You can also use arrays
$bar = ['value' => 'foo'];

echo "this is {$bar['value']} !"; // this is foo !

// Using single quotes will print the variable name, not the value
echo 'foo is $foo'; // foo is $foo

// If you are not using any other characters, you can just print variables
// print $foo;          // foobar

echo <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;

echo 'Hello World';

// Strings can either be passed individually as multiple arguments or
// concatenated together and passed as a single argument
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', chr(10);
echo 'This '.'string '.'was '.'made '.'with concatenation.'."\n";

// Because echo does not behave like a function, the following code is invalid.
// ($some_var) ? echo 'true' : echo 'false';

// However, the following examples will work:
($some_var) ? print 'true' : print 'false'; // print is also a construct, but
// it behaves like a function, so
// it may be used in this context.

echo $some_var ? 'true' : 'false'; // changing the statement around
