<?php
$message = $_POST["message"];
$bad_word = $_POST["bad-word"];

$censored_message = str_replace($bad_word, "***", $message);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censurato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>
    <div class="container">
        <div class="my-3">
            <!-- stampare a schermo il messaggio -->
            <h2>Ecco il tuo messaggio</h2>
            <p><?php echo $message ?></p>

            <!-- stampare a schermo la lunghezza del messaggio -->
            <p>
                Hai scritto un messaggio di <?php echo strlen($message) ?> caratteri.
            </p>

            <!-- stampare a schermo il testo con censura  -->
            <h2>La censura</h2>
            <p><?php echo $censored_message ?></p>

            <!-- stampare a schermo la lughezza del messaggio censurato -->
            <p>
                Il messaggio censurato ha <?php echo strlen($censored_message) ?> caratteri.
            </p>
        </div>
    </div>

</body>

</html>