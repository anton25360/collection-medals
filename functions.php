<?php


/**
 * Adds event to DB
 *
 * @param string $event the event string from form
 * @param int $year the year int from form
 * @param string $place the place string from form
 */
function addEvent(string $event, int $year, string $place){

    $db = new PDO('mysql:host=db;dbname=collection','root','password');
    $query = $db -> prepare('INSERT INTO `events` (`event`, `year`, `place`) VALUES (:event, :year, :place)');

    $query->bindParam(':event', $event);
    $query->bindParam(':year', $year);
    $query->bindParam(':place', $place);
    $query ->execute();
}