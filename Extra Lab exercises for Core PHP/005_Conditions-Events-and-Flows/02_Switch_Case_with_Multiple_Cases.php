<?php
$grade = "B";

switch ($grade) {
    case "A":
    case "B":
        echo "Excellent";
        break;
    case "C":
        echo "Good";
        break;
    case "D":
        echo "Needs Improvement";
        break;
    case "F":
        echo "Failed";
        break;
    default:
        echo "Invalid grade";
}
?>