<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Email</title>
</head>
<body>
    
    <?php

        $stringaDiRisposta = "";

        //voglio verificare se nella email da controllare è presente il simbolo @ e il .
        if (isset($_GET['email'])) {

            //verifico che l'indirizzo email fornito è valido
            $emailDaControllare = $_GET['email'];

            if (strpos($emailDaControllare, '@') !== false && strpos($emailDaControllare, '.') !== false) {
                $stringaDiRisposta = "Email valida";
            } else {
                $stringaDiRisposta = "Email non valida!";
            }

        } else {
            $stringaDiRisposta =  "Non hai fornito una email valida!";
        }
    ?>

    <div><?php echo $stringaDiRisposta;?></div>

</body>
</html>






