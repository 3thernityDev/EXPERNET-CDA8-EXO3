<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EXPERNET | CDA8 EXO3</title>
</head>

<body>
    <div class="container">

        <h1><?php echo ("La CDA8 vous souhaite une exelente journée ! ") ?></h1>
        <p><?php // FOREACH TEST
            $tabStudents = array("Julien", "Lou", "Dorian", "Jerremy");
            foreach ($tabStudents as $studentName) {
                echo $studentName . "<br/>";
            } ?></p>
    </div>
</body>

</html>

<?php
// RANDOM BG
$random = rand(1, 2);
if ($random == 1) {
    echo ("<body class=light></body>");
} else {
    echo ("<body class=dark></body>");
}


?>