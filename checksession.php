<?php

session_start();

if (! empty($_SESSION['access'])) {
    echo session_id();
    echo $_SESSION['access'];
} else {

    echo 'not set';
}
