<?php require_once "functions.php"; error_reporting(0); ?>

<!DOCTYPE html>
<head>
    <title>Collection</title> <!-- tab title -->
    <link href="normalize.css" rel="stylesheet" type="text/css"> <!-- normalize file -->
    <link href="style.css" rel="stylesheet" type="text/css"> <!-- css file -->
    <link href="assets/webfonts/stylesheet.css" rel="stylesheet" type="text/css"> <!-- font file -->
</head>

<body>

<form method="post">
    <label for="event"> Event name:
        <input type="text" name="event" placeholder="Cycling">
    </label>

    <input type="submit" name="submit">
</form>

<a href="index.php" id="collectionButton">View Collection</a>

</body>

<?php removeEvent($_POST['event']); ?>
