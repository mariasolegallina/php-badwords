<?php
$message = $_POST["message"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censurato</title>
</head>
<body>
    <!-- stampare a schermo il messaggio -->
    <h1>Ecco il tuo messaggio</h1>
    <p><?php echo $message ?></p>

    <!-- stampare a schermo la lunghezza del messaggio -->
    <p>
        Hai scritto un messaggio di <?php echo strlen($message) ?> caratteri.
    </p>
    
</body>
</html>