<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXPERNET | CDA8 EXO5</title>
</head>

<body>
    <div class="container">
        <h1>Va tu trouver le bon chiffre ?</h1>
        <form method="POST" action="">
            <input type="number" name="number" id="number">
            <input type="submit" placeholder="validez ma réponse">
            <p></p>
        </form>
    </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $res = $_POST["number"];
    $score = 0;
    if (!isset($ingame)) {
        $ingame = 1;
        $random = rand(1, 100);
        log($random);
    }

    if ($random == $res) {
        echo ("<p>Bravo tu as trouvé le bon chiffre !");
        echo ("<p>Nombre d'essaie:" . $score);
        log($res);
    } else {
        if ($random > $res) {
            echo ("<p>Plus grand !</p>");
            echo ("<p>Nombre d'essaie:" . $score);
        } else {
            echo ("<p>Plus petit! </p>");
            echo ("<p>Nombre d'essaie:" . $score);
        }
    }
}
?>