<?php
$password_length = $_GET['password'] ?? '';
//var_dump($_GET); ok prende il valore del input !
//array con i caratteri 

function random_Pass_general($password_length)
{
    //array con i caratteri 
    $array_caratteri = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $array_numeri = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
    $array_special = ['!', '"', '£', '$', '%', '&', '/', '(', ')', '=', '?', '^', '*', '°', '§'];
    //somma array con i caratteri 
    $totale_caratteri = array_merge($array_caratteri, $array_numeri, $array_special);
    //var_dump($totale_caratteri); merge ok 
    //lunghezza dei caratteri 
    $caratteri_lenght = count($array_caratteri) - 1;
    $numeri_lenght = count($array_numeri) - 1;
    $special_lenght = count($array_special) - 1;
    $total_lenght = count($totale_caratteri) - 1;
    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, $total_lenght);
        $pass[] = $totale_caratteri[$n];
    }
    return implode($pass);
}
if ($password_length === "") {
    $password_gener = "inserisci la lunghezza della password";
} else {
    $password_gener = random_Pass_general($password_length);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <input type="text" name="password">
        <button type="submit">Crea Password</button>
    </form>
    <div>
        <h3>la tua password è <?php echo $password_gener ?> </h3>
    </div>
</body>

</html>