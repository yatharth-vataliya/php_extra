<?php

session_start();

$_SESSION['access'] = session_regenerate_id();

echo session_id();
