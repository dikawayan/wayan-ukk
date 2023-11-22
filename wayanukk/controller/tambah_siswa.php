<?php
include '../config/config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tplahir = $_POST['tplahir'];
    $tglahir = $_POST['tglahir'];
    $alamat = $_POST['alamat'];
    $cita_cita = $_POST['cita_cita'];
    $jm_saudara = $_POST['jm_saudara'];
    $idkelas = $_POST['idkelas'];
    $idagama = $_POST['idagama'];

    $sql = "INSERT INTO siswa (id, nama, tplahir, tglahir, alamat, hobi, cita-cita, jm_saudara, idkelas, idagama) 
             VALUE ('$id', '$nama', '$tplahir', '$tglahir', '$alamat', '$hobi', '$cita_cita, '$jm_saudara','$idkelas', $'idagama')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location: ../siswa.php?status=sukses');
    }
    else {
        header('location: ../siswa.php?status=gagal');
    }
}

?>