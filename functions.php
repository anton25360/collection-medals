<?php
function addEvent(string $event, int $year, string $place){

    $db = new PDO('mysql:host=db;dbname=collection','root','password');
    $query = $db -> prepare('INSERT INTO `events` (`event`, `year`, `place`) VALUES (:event, :yr, :place)');

    $query->bindParam(':event', $event);
    $query->bindParam(':yr', $year);
    $query->bindParam(':place', $place);
    $query ->execute();
}