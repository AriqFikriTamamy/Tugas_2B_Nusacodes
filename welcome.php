<?php
$name = $_POST["name"];
$date_birth = new DateTime($_POST['date']);
$now = new DateTime("today");
if ($date_birth > $now) {
    $year = "0";
}
$year = $now->diff($date_birth)->y;

?>