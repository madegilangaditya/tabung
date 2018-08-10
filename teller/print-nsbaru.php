<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
    include 'head.php';
    $sel = mysqli_query($con, "select no_rekening, no_identitas, nama, jns_kelamin, agama, tp_lahir, t_lahir, alamat,
    kecamatan from tb_nasabah where id_nasabah =(select max(id_nasabah) from tb_nasabah) ");
    $hsl = mysqli_fetch_array($sel);
  ?>
  <body onload="window.print()">
      <div class="" style="width:20%; display:inline-block;">

      </div>
      <div class="col-lg-10" >
        <div class="form-group">
            <span style="margin-left: 100px;"><?php echo "$hsl[no_rekening]"; ?></span>
        </div>

        <div class="form-group">
            <span style="margin-left: 100px;"><?php echo "$hsl[nama]"; ?></span>
        </div>

        <div class="form-group">
            <span style="margin-left: 100px;"><?php echo "$hsl[alamat]"; ?></span>
        </div>

      </div>




  </body>
</html>
