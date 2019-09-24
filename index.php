<?php
//todo add functions file
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
        $message = ' 🤮';
    }

    echo '<p> Event: ' . $event . ', '. $year . '. You came ' . $place . $message . '</p>';
}

echo addEvent($_POST['event'],$_POST['year'],$_POST['place']);

?>
<!DOCTYPE html>
<head>
    <title>title</title> <!-- tab title -->
    <link href="normalize.css" rel="stylesheet" type="text/css"> <!-- normalize file -->
    <link href="style.css" rel="stylesheet" type="text/css"> <!-- css file -->
    <link href="assets/webfonts/stylesheet.css" rel="stylesheet" type="text/css"> <!-- font file -->
</head>

<body>

<br>
    <form method="post">
        <p2>Add an event:</p2>
        <input type="text" name="event" placeholder="Cycling">
        <input type="text" name="year" placeholder="2012">
        <input type="text" name="place" placeholder="1st">
        <input type="submit" value="Add">
    </form>

</body>
