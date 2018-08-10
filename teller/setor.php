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
                            Setor Tunai
                          </div>
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-lg-6">
                                <form class="" action="proses-setor.php" method="post">
                                  <div class="form-group">
                                      <label>Nomor Rekening</label>
                                      <input name="rek" type="number" class="form-control" placeholder="Nomor Rekening" required>
                                  </div>
                                  <div class="form-group">
                                      <label>Jumlah Setoran</label>
                                      <input name="jml" type="number" class="form-control" placeholder="Jumlah Setoran" required>
                                  </div>
                                  <button class="btn btn-primary"type="submit" name="button">Submit</button>
                                </form>
                              </div>
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
