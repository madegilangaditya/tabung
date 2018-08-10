<?php
  session_start();
  include '../koneksi.php';
  if ($_SESSION['user']==""  && $_SESSION['oto']!=1) {
    // code...
    header('location:../index.php');
  }

  $no_ktp = $_POST['no_ktp'];
  $klm = $_POST['kelamin'];
  $tplahir = $_POST['tp_lahir'];
  $alamat = $_POST['alamat'];
  $nm = $_POST['nama'];
  $agm = $_POST['agama'];
  $tlahir = $_POST['t_lahir'];
  $kec = $_POST['kec'];

  $ins = mysqli_query($con, "insert into tb_nasabah values ('','$no_ktp', '$no_ktp', '$nm', '$klm', '$agm'
  ,'$tplahir', '$tlahir', '$alamat', '$kec')");
  header('location:det-nasabah.php');
?>
