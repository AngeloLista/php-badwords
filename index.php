<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<?php
$paragraph = '<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum enim, dolorem error vero exercitationem consectetur id deleniti quibusdam. Laudantium nesciunt necessitatibus est illum optio excepturi sapiente facere accusamus quidem labore. </p>'
?>

<body>
    <main>
        <p>
            <?php
            echo $paragraph;
            echo strlen($paragraph);
            ?>
        </p>

        <form action="censored.php" method="GET">
            <input type="text" name="word" placeholder="Scrivi un parola da censurare">
            <button type="submit">Invia</button>
        </form>
    </main>

</body>

</html>





<!--
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
-->