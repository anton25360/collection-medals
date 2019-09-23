<?php
//functions file

function addEvent(string $event, string $year, string $place){

    $db = new PDO('mysql:host=db;dbname=collection','root','password');

    return $event.$year.$place;

}
