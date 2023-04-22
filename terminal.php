<?php

// Loop through each command entered by the user
while (true) {
    // Read the user's input
    $input = readline('> ');

    // Exit the loop if the user enters "exit"
    if ($input === 'exit') {
        break;
    }

    // Execute the command and display the output
    $output = shell_exec($input);
    echo $output . PHP_EOL;
}
