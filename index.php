<?php
    // 4) Créer une fonction addition
    function addition($nbr1, $nbr2){
        return $nbr1 + $nbr2;
    };

    // 7) Initialiser une variable contenant un tableau
    $myTab = ["Jeff", "Mathieu", "Yann", "Yoann"];

    // 8)9) Créer une fonction displayTab...
    function displayTab($myTab){
        for($i = 0; $i < sizeof($myTab); $i++){
            if($i % 2 == 0){
                echo "$myTab[$i] ! ";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    </header>
    <main>
        <h1>Bienvenue sur ma page PHP</h1>
        <?php
            // 5) Afficher le résultat de l'addition de 2 et 5
            echo "<p>Le Résultat de 2 + 5 est de : ".addition(2, 5)." !</p>";

            // 6) Afficher les nombres de 10 à 1 en utilisant une boucle for
            for($i = 10; $i > 0; $i--){
                echo "<p>Le nombre est : {$i}</p>";
            }
        ?>
        <p><?php
            // 10) Afficher les éléments du tableau d'index pairs
            displayTab($myTab);
        ?></p>
    </main>
    <footer>
    </footer>
</body>
</html>