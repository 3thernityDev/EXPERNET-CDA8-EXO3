<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $code = "1234";

    // Comparer le mot de passe
    if ($password === $code) {
        echo ("Ce secret ne te sera jamais dévoiler mais bien jouer ! Ta réussie a trouver mon code va falloire que je pense à le changer ...");
    } else {
        echo "<p style='color:red;'>Code incorrect</p>";
    }
}
