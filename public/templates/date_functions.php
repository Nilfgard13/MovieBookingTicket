<?php
// date_functions.php

function getRealTimeDate() {
    $days = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
    $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

    $day = $days[date("w")];
    $date = date("d");
    $month = $months[date("n") - 1];
    $year = date("Y");

    return $day . ", " . $date . "-" . $month . "-" . $year;
}
?>