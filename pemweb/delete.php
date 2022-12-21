<?php
include 'koneksi.php';
if (isset($_GET['nik'])) {
    $delete = mysqli_query($koneksi, "DELETE FROM dt_penduduk WHERE nik='" . $_GET['nik'] . "'");
    header('location:view.php');
}