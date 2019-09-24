<?php require_once "functions.php"; error_reporting(0); ?>

<!DOCTYPE html>
<head>
    <title>title</title> <!-- tab title -->
    <link href="normalize.css" rel="stylesheet" type="text/css"> <!-- normalize file -->
    <link href="style.css" rel="stylesheet" type="text/css"> <!-- css file -->
    <link href="assets/webfonts/stylesheet.css" rel="stylesheet" type="text/css"> <!-- font file -->
</head>

<body>
<form method="post">
    Add an event:
    <input type="text" name="event" placeholder="Cycling">
    <input type="text" name="year" placeholder="2012">
    <input type="text" name="place" placeholder="1st">
    <input type="submit" name="submit">
    <a href="index.php">go back to main page</a>
</form>
</body>

<?php addEvent($_POST['event'], $_POST['year'], $_POST['place']); ?>
