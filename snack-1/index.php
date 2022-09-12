<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punteggi partite</title>
</head>
<body>


<?php

    $partite = [
        [
            'squadraCasa' => 'Pistoia',
            'squadraOspite' => 'Prato',
            'puntiCasa' => 30,
            'puntiOspite' => 5
        ],
        [
            'squadraCasa' => 'Arezzo',
            'squadraOspite' => 'Siena',
            'puntiCasa' => 40,
            'puntiOspite' => 25
        ],
        [
            'squadraCasa' => 'Livorno',
            'squadraOspite' => 'Pisa',
            'puntiCasa' => 50,
            'puntiOspite' => 60
        ]
    ];

?>

<ul>
    <?php
        for ($i = 0; $i < count($partite); $i++) {
            $partitaCorrente = $partite[$i];
            echo    "<li>" . $partitaCorrente['squadraCasa'] . 
                    " - " . $partitaCorrente['squadraOspite'] . 
                    " | " . $partitaCorrente['puntiCasa'] . 
                    " - " . $partitaCorrente['puntiOspite'] . 
                    "</li>";
        }
    ?>
</ul>
    
</body>
</html>
