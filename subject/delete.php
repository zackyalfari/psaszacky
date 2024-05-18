<?php
include_once ('config.php');
$id = $_GET['id'];
$sql = "DELETE from subject WHERE id='$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    header('location: index.php?m=subject&s=view');
} else {
    echo '<script language="JavaScript">';
    echo 'alert("Data Gagal Ditambahkan.")';
    echo '</script>';
}