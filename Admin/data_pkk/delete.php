<?php
include '../../config.php';

$id = $_GET["id"];
$conn->query("DELETE FROM pkk_data WHERE id=$id");

header("Location: ../index.php");
