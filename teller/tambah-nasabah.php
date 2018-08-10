<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
    include 'head.php';
  ?>
  <body>
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
                              <div class="col-lg-6">
                                <form class="" action="proses-tambah-nsb.php" method="post">
                                  <div class="form-group">
                                      <label>Nomor KTP/SIM</label>
                                      <input name="no_ktp" type="number" class="form-control" placeholder="Nomor KTP/SIM" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Jenis Kelamin</label>
                                      <div class="radio">
                                          <label>
                                              <input type="radio" name="kelamin" id="optionsRadiosInline1" value="1" checked="">Laki-Laki
                                          </label>
                                          <label>
                                              <input type="radio" name="kelamin" id="optionsRadiosInline1" value="2">Perempuan
                                          </label>
                                      </div>

                                  </div>
                                  <div class="form-group">
                                      <label>Tempat lahir</label>
                                      <input name="tp_lahir" type="text" class="form-control" placeholder="Tempat Lahir" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Alamat</label>
                                      <textarea name="alamat" type="text" class="form-control" placeholder="Alamat" required></textarea>
                                  </div>

                                  <button class="btn btn-primary"type="submit" name="button">Submit</button>

                              </div>
                              <div class="col-lg-6">

                                  <div class="form-group">
                                      <label>Nama</label>
                                      <input name="nama" type="text" class="form-control" placeholder="Nama Nasabah" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Agama</label>
                                      <select name="agama" class="form-control">
                                          <option value="Budha">Budha</option>
                                          <option value="Hindu">Hindu</option>
                                          <option value="Islam">Islam</option>
                                          <option value="Katholik">Katholik</option>
                                          <option value="Kristen">Kristen</option>
                                          <option value="Lainnya">Lainnya</option>
                                      </select>
                                  </div>

                                  <div class="form-group">
                                      <label>Tanggal lahir</label>
                                      <input name="t_lahir" type="date" class="form-control" placeholder="Tanggal Lahir" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Kecamatan</label>
                                      <input name="kec" type="text" class="form-control" placeholder="Kecamatan" required>
                                  </div>

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
