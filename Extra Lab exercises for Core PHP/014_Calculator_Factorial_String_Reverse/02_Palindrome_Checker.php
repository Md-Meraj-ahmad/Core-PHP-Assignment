<?php
function is_palindrome($str) {
    $str = strtolower(str_replace(' ', '', $str));
    
    return $str === strrev($str);
}

$test_string = "madam";
if (is_palindrome($test_string)) {
    echo "$test_string is a palindrome.<br>";
} else {
    echo "$test_string is not a palindrome.<br>";
}
?>
