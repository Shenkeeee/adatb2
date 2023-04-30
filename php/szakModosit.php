<?php

session_start();
$username=$_SESSION['username'];

if (!isset($_SESSION["username"])) {
    header("Location: bejelentkezes.php");
}

require_once "../tools/navbar.php";
require "../tools/connect.php";

require_once "../tools/adminvizsgalat.php";
require "../tools/connect.php";


$stid = oci_parse($conn, 'SELECT szakid FROM szak');
oci_execute($stid);

$szakid = $_POST["szakid"];
$szaknev = $_POST["szaknev"];


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/listaz.css" rel="stylesheet">

    <title>Szak módosít</title>
</head>
<body>
<h1>Szak módosítása</h1>

<form action="../tools/szakModositTool.php" method="POST">

    Szak ID <?php echo $szakid ?>
    <input name="szakid" type="hidden" value="<?php echo $szakid ?>">


    Szak Név
    <input name="szaknev" value="<?php echo $szaknev ?>">  <br>



    <button type="submit">Modosit</button> <br>
</form>

</body>
</html>
