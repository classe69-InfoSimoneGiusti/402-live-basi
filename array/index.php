<?php

    $myArray = ['primo_valore', 'secondo_valore'];      
    var_dump($myArray);

    $arrayAssociativo = [ 
            'miaChiave' => 'mioValore',
            'miaSecondaChiave' => 'mioSecondoValore'
    ];

    echo $myArray[1];

    echo '<br>';

    echo $arrayAssociativo['miaSecondaChiave'];


    $myArray[] = 'terzo_valore'; //equivale a .push() di js

    var_dump($myArray);


    $arrayAssociativo['miaTerzaChiave'] = 'mioTerzoValore'; // se la chiave non è presente, aggiungo la chiave ed il relativo valore

    $arrayAssociativo['miaChiave'] = 'pippo';  //se la chiave è già presente, ne modifico il valore

    var_dump($arrayAssociativo);



    // array multidimensionali


    $myArrayMultidimensionale = [
        [
            "nome" => "Mario",
            "cognome" => "Rossi"
        ],
        [
            "nome" => "Cristina",
            "cognome" => "Bianchi"
        ]
    ];

    //se volessi accedere al cognome del primo studente:
    echo $myArrayMultidimensionale[0]['cognome'];


    echo "<br>";


    $myArrayMultidimensionaleAssociativo = [
        "primoStudente" => [
            "nome" => "Mario",
            "cognome" => "Rossi"
        ],
        "secondoStudente" => [
            "nome" => "Cristina",
            "cognome" => "Bianchi"
        ]
    ];

    //se volessi accedere al cognome del primo studente:
    echo $myArrayMultidimensionaleAssociativo['primoStudente']['cognome'];
