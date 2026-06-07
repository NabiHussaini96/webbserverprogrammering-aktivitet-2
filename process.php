<?php

$namn = trim($_POST["namn"]);
$meddelande = trim($_POST["meddelande"]);

if (empty($namn) || empty($meddelande))
{
    echo "
    <!DOCTYPE html>
    <html lang='sv'>
    <head>
        <meta charset='UTF-8'>
        <title>Fel</title>
        <link rel='stylesheet' href='style.css'>
    </head>

    <body>

        <div class='container'>

            <h1>Fel</h1>

            <p>Alla fält måste fyllas i.</p>

            <a href='index.php'>Tillbaka</a>

        </div>

    </body>
    </html>
    ";

    exit();
}

?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meddelande mottaget</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>
        Hej <?php echo htmlspecialchars($namn); ?>!
    </h1>

    <p>
        Ditt meddelande har mottagits.
    </p>

    <div class="message-box">

        <h2>Ditt meddelande:</h2>

        <p>
            <?php echo htmlspecialchars($meddelande); ?>
        </p>

    </div>

    <a href="index.php">
        Skicka nytt meddelande
    </a>

</div>

</body>
</html>