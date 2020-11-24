<?php

function display() : string {
    return __LINE__;

    return __LINE__; // in this condition first return will be considered and function return the value of firt return statement value;
}

echo display();
return __LINE__;

return __LINE__;
?>