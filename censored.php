<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censurato</title>
</head>

<?php
$word = $_GET['word'];
$paragraph = '<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum enim, dolorem error vero exercitationem consectetur id deleniti quibusdam. Laudantium nesciunt necessitatibus est illum optio excepturi sapiente facere accusamus quidem labore. </p>';
$new_paragraph = str_replace($word, '***', $paragraph);
?>

<body>
    <main>
        <p>
            <?php
            echo $new_paragraph;
            echo strlen($new_paragraph);
            ?>
        </p>

        <a href="javascript:history.back()">Go Back</a>
    </main>

</body>

</html>