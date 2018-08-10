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
    					  <li class="active">Penarikan</li>
    					</ol>

  		</div>
              <div id="page-inner">
                  <div class="row">
                      <div class="col-lg-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            Penarikan Tabungan
                          </div>
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-md-12">
                                <form class="" action="proses-setor.php" method="post">
                                  <div class="col-md-4" style="float :right;">
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control" placeholder="Masukkan Nomer Rekening">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
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
