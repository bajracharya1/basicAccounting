<?php
include('includes/db.php');
$conn = db_connect();
$sqlExp = "DELETE FROM exp WHERE id=".$_GET['id'].";";
$sqlIncome = "DELETE FROM income WHERE id=".$_GET['id'].";";
$sql = "DELETE FROM off_exp WHERE id=".$_GET['id'].";";

$conn->query($sqlExp) or die('there was an error!');
$conn->query($sqlIncome) or die('there was an error!');
$conn->query($sql) or die('there was an error!');

header("Location: index.php?message=delete_success&id=".$_GET['id']);