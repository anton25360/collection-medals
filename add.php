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
    <label for="event"> Event name:
        <input type="text" name="event" placeholder="Cycling">
    </label>

    <label for="year"> Year:
        <input type="text" name="year" placeholder="2012">
    </label>

    <label for="place"> Position:
        <input type="text" name="place" placeholder="1st">
    </label>

    <input type="submit" name="submit">
</form>

<a href="index.php">View Collection ></a>

</body>

<?php addEvent($_POST['event'], $_POST['year'], $_POST['place']); ?>
