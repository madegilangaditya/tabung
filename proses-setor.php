<?php
  include '../koneksi.php';
  date_default_timezone_set("Asia/Makassar");
  $tgl = date("Y-m-d H:i:s");

  $no_rek = $_POST['rek'];
  $jml = $_POST['jml'];

  $sel = mysqli_query($con, "select id_nasabah from tb_nasabah where no_rekening='$no_rek'");
  $sl = mysqli_fetch_array($sel);
  //$sd = mysqli_query($con, "select total_saldo from tb_saldo where ")

  $ins = mysqli_query($con, "insert into tb_transaksi values('','$sl[id_nasabah]', 1, '$jml', '$tgl' )");
  $ins2 = mysqli_query($con, "insert into tb_saldo values('',(select max(id_transaksi) from tb_transaksi),
  (select sum(jumlah) from tb_transaksi where id_nasabah = (select max(id_nasabah) from tb_transaksi)))");

  header('location:after-setor.php');
?>
