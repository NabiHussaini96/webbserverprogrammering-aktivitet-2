<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontaktformulär - PHP</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Kontaktformulär</h1>

    <form action="process.php" method="post">

        <label for="namn">Namn</label>
        <input
            type="text"
            id="namn"
            name="namn"
            placeholder="Skriv ditt namn">

        <label for="meddelande">Meddelande</label>
        <textarea
            id="meddelande"
            name="meddelande"
            rows="5"
            placeholder="Skriv ditt meddelande"></textarea>

        <button type="submit">
            Skicka
        </button>

    </form>

</div>

</body>
</html>