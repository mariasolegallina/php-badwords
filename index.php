<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>
    <div class="container">
        <div class="my-3">
            <h1>Testo da censura</h1>

            <!-- creare un form PHP che permetta di inviare un messaggio e una parola da censurare -->
            <form action="censored.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Scrivi il tuo messaggio</label>
                    <!-- <input class="form-control" type="text" name="message"> -->
                    <textarea class="form-control" type="text" name="message"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Quale parola vuoi censurare?</label>
                    <input class="form-control" type="text" name="bad-word">
                </div>
                <button class="btn btn-primary" type="submit">Invia</button>
            </form>
        </div>

    </div>


</body>

</html>