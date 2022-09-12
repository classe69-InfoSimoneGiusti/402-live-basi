<?php

    //definisco un array con dei nomi di invitati
    $invitati = ['Pippo', 'Pluto', 'Paperino'];

    


    
    if (empty($_GET['nome'])) {
        echo "Ti sei scordato di passare il nome";
    } else {

        //recupero il nome dell'invitato per capire se possa accedere
        $nome = $_GET['nome'];

        //ed infine verifico se l'invitato puo accedere
        if (in_array($nome, $invitati)) {
            echo 'Puoi accedere';
        } else {
            echo 'Non puoi entrare';
        }

    }

    
?>