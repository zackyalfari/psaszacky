
<?php
if (isset ($_POST['simpan'])) {
    include_once ('config.php');
    $subject = $_POST['subject'];
    $hour = $_POST['hour'];

    $sql = "INSERT INTO subject SET subject='$subject', hour='$hour'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=subject&s=view');
    } else {
        include "index.php";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}
