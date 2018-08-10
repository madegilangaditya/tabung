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
    					  <li class="active">Tutup Tabungan</li>
    					</ol>

  		</div>
              <div id="page-inner">
                  <div class="row">
                      <div class="col-lg-12">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            Tutup Tabungan
                          </div>
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-md-12">

                                  <div class="col-md-4" style="float :right;">
                                    <div class="form-group input-group">
                                        <input id="rek" type="text" class="form-control" placeholder="Masukkan Nomer Rekening" required>
                                        <span class="input-group-btn">
                                            <button id="carirek" class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                  </div>




                              </div>
                                <div class="col-md-12" id="result"></div>

                            </div>
                          </div>
                        </div>
                      </div>

                  </div>
              </div>
              <!-- /. PAGE INNER  -->


          </div>
          <!-- /. PAGE WRAPPER  -->
          <script>
              $(document).ready(function(){

                $("#carirek").click(function(){
                
                  var rek = $("#rek").val();
                  $.ajax({
                  				url: "cari-rek.php",
                          data: "rek="+rek,
                          cache:false,
                          success: function(msg) {
                            $("#result").html(msg);
                          }

                			  });

                });


              });

          </script>
      </div>
      <!-- /. WRAPPER  -->
      <?php include 'footer.php'; ?>

  </body>
</html>
