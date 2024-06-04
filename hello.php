<?php
try
{
    $connString = "msql:host=localhost;port=5432;dbname=test";
    $user = "admin";
    $password = "admin";

    $pdo = new PDO($connString, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "";
    $result = $pdo->query($sql);
    while($row = $result->fetch())
    {
        echo $row[''] . "-" . $row[''] . "<br>";
    }
    $pdo = null;
}
catch(PDOException $e) {
    die($e->getMessage());
}
?>