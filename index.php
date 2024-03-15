<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
</head>
<body>
    <h1>Testo da censura</h1>

    <!-- creare un form PHP che permetta di inviare un messaggio e una parola da censurare -->
    <form action="censored.php" method="POST">
        <input type="text" name="message" placeholder="scrivi un messaggio">
        <input type="text" name="bad-word" placeholder="scrivi la parola da censurare">
        <input type="submit" value="Invia">
    </form>

    
</body>
</html> 