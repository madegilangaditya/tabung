<?php
  include '../koneksi.php';
  $sc = $_GET['rek'];
  //echo "$sc";
  $sel = mysqli_query($con, "select id_nasabah, no_rekening, no_identitas, nama, jns_kelamin, agama, tp_lahir, t_lahir, alamat,
  kecamatan from tb_nasabah where no_rekening='$sc'");

  if(mysqli_num_rows($sel)==0){
    echo "data not found";
  }else {
    // code...
    $hsl= mysqli_fetch_array($sel);
    echo "<div class='col-lg-2'>

        <div class='form-group'>
            <label id='det'>Nomor Rekening:</label>
        </div>
        <div class='form-group'>
            <label id='det'>Nama Nasabah:</label>
        </div>
        <div class='form-group'>
            <label id='det'>Alamat</label>

        </div>




    </div>
    <div class='col-lg-10'>
      <div class='form-group'>
          <span> $hsl[no_rekening]</span>
      </div>

      <div class='form-group'>
          <span>$hsl[nama]</span>
      </div>

      <div class='form-group'>
          <span>$hsl[alamat]</span>
      </div>
      <a class='btn btn-primary right' href='setor.php' >Batal</a>
      <a  class='btn btn-primary right' href='print-nsbaru.php' >Tutup</a>

    </div>";
  }

?>
