<?php
$message = $_POST["message"];
$bad_word = $_POST["bad-word"];

$censored_message = str_replace( $bad_word, "xxx", $message );
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

    <!-- stampare a schermo il testo con censura  -->
    <h1>La censura</h1>
    <p><?php echo $censored_message ?></p>

    <!-- stampare a schermo la lughezza del messaggio censurato -->
    <p>
        Il messaggio censurato ha <?php echo strlen($censored_message) ?> caratteri.
    </p>
    
</body>
</html>