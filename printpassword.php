<?php
session_start();
$print_pass = $_SESSION['password'];
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
    <h3 class="pt-5">La tua password è: <?php echo $print_pass ?></h3>

</body>

</html>