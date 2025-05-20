<?php
include 'dbcon.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM info_wf WHERE id = '$id'";
    $conn->query($sql);
    header("Location: read.php");
    exit;
}
?>