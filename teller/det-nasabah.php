<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
    include 'head.php';
    $sel = mysqli_query($con, "select no_rekening, no_identitas, nama, jns_kelamin, agama, tp_lahir, t_lahir, alamat,
    kecamatan from tb_nasabah where id_nasabah =(select max(id_nasabah) from tb_nasabah) ");
    $hsl = mysqli_fetch_array($sel);
  ?>
  <body >
      <div id="wrapper">
          <?php include 'nav.php'; ?>




  		<div id="page-wrapper">
  		  <div class="header">

  						<ol class="breadcrumb">
    					  <li><a href="#">Home</a></li>
    					  <li class="active">Setor</li>
    					</ol>

  		</div>
              <div id="page-inner">
                  <div class="row">
                      <div class="col-lg-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            Nasabah Baru
                          </div>
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-lg-2">
                                <form class="" action="proses-tambah-nsb.php" method="post">
                                  <div class="form-group">
                                      <label id="det">Nomor Rekening:</label>
                                  </div>
                                  <div class="form-group">
                                      <label id="det">Nama Nasabah:</label>
                                  </div>
                                  <div class="form-group">
                                      <label id="det">Alamat</label>

                                  </div>




                              </div>
                              <div class="col-lg-10">
                                <div class="form-group">
                                    <span><?php echo "$hsl[no_rekening]"; ?></span>
                                </div>

                                <div class="form-group">
                                    <span><?php echo "$hsl[nama]"; ?></span>
                                </div>

                                <div class="form-group">
                                    <span><?php echo "$hsl[alamat]"; ?></span>
                                </div>
                                <a class="btn btn-primary right" href="setor.php" >Setoran Pertama</a>
                                <a target="_blank" class="btn btn-primary right" href="print-nsbaru.php" >Print</a>

                              </div>

                            </form>
                            </div>
                          </div>
                        </div>
                      </div>

                  </div>
              </div>
              <!-- /. PAGE INNER  -->


          </div>
          <!-- /. PAGE WRAPPER  -->

      </div>
      <!-- /. WRAPPER  -->
      <?php include 'footer.php'; ?>

  </body>
</html>
