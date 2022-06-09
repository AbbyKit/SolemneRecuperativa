<?php
session_start();
// if(empty($_SESSION["name"])) {
//     header("Location:home.html");
// }
$name=$_SESSION["name"];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>
    <ul>
    <li><h1>Bienvenido: <?php echo $name; ?></h1>
    <h3><a href="Cerrar.php">Cerrar mi sesion</a></h3></li>
    </form>
</body>

</html>
