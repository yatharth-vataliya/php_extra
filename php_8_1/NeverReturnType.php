<?php

function redirect(string $uri): never
{
    header('Location: '.$uri);
    exit();
}

function redirectToLoginPage(): never
{
    redirect('/login');
    echo 'Hello'; // <- dead code detected by static analysis
}

// A function or method declared with the never type indicates that it will not return a value and will either throw an exception or end the script’s execution with a call of die(), exit(), trigger_error(), or something similar.
