<?php

require_once("../includes/dbh.inc.php");

$query="SELECT * FROM test";
$stmt=$pdo->prepare($query);
$stmt->execute();
header("Content-Type: application/json");
echo(json_encode($stmt->fetchAll(PDO::FETCH_ASSOC)[0]["item"]));