<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "Invoice");
function db()
{
    global $mysqli;
    return $mysqli;
}
