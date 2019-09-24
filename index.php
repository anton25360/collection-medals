<?php
require "functions.php";

$db = new PDO('mysql:host=db;dbname=collection','root','password');
$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db -> query('SELECT `event`,`year`,`place` FROM `events`');
$events = $query ->fetchAll();

foreach ($events as $eventTable) {
    $event = $eventTable['event'];
    $year = $eventTable['year'];
    $place = $eventTable['place'];

    $message='';
    if ($place == '1st'){
        $message = ' 🥇';
    } elseif ($place == '2nd') {
        $message = ' 🥈';
    } elseif ($place == '3rd') {
        $message = ' 🥉';
    } else {
        $message = ' 💩';
    }

    echo '<p> Event: ' . $event . ', '. $year . '. You came ' . $place . $message . '</p>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Collection</title>
    <link href="assets/webfonts/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="normalize.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body> <a href="add.php">Add a new achievement ></a> </body>
