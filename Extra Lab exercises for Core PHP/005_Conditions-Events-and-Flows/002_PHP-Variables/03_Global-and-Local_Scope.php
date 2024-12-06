<?php
$x = "I am global";

function testScope() {
    global $x;
    echo $x;
}
testScope();
?>
