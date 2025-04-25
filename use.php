<?php

namespace App;

function session_start()
{
    echo 'session started';
}
\session_start();
$_SESSION['name'] = 'yatharth';
$_SESSION['sname'] = 'vataliya';
$data = session_encode();
echo $data,'<br/>';
var_dump(session_decode($data));
require_once 'namespace.php';
use withnamespace;

use function withnamespace\why;

// withnamespace\why("yatharth vataliya from kalawad :)"); // work fine
// why("nothing is impossible in this world"); not working without use function
why('hello :)');
