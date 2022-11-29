<?php
$password_length = $_GET['password'] ?? '';

include __DIR__ . '/func/function.php';
random_Pass_general($password_length);

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
        <input type="number" name="password">
        <button type="submit">Crea Password</button>
    </form>
    <div>
        <h3>la tua password è <?php echo $password_gener ?> </h3>
    </div>
</body>

</html>