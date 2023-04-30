<?php
require_once "../tools/navbar.php";
require "../tools/connect.php";


$rowsadmin = "";

// adminhoz - hogy olyat ne lehessen kivalasztani aki mar admin

$stid2 = oci_parse($conn, 'SELECT eha_kod FROM hallgato');
oci_execute($stid2);



// felhasznalokhoz

$stid = oci_parse($conn, 'SELECT eha_kod FROM felhasznalo');
oci_execute($stid);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kurzus hozzáad</title>
</head>
<body>
<h1>Kurzus hozzáadása </h1>

<form action="../tools/kurzusHozzaaadTool.php" method="POST">

    Kod
    <input name="kod">  <br>

    Nev
    <input name="nev">  <br>

    Kredit
    <input name="kredit">  <br>

    Oraszam
    <input name="oraszam">  <br>

    Nap
    <input name="nap">  <br>

    Kezdet
    <input name="kezdet">  <br>

    Veg
    <input name="veg">  <br>

    Teremnev
    <input name="teremnev">  <br>

    TargyKod
    <input name="targykod">  <br>

    <button type="submit">Hozzaad</button> <br>
</form>

</body>
</html>
