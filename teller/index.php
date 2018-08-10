<!DOCTYPE html>
<html >

<?php
  include 'head.php';
?>

<body>
    <div id="wrapper">
        <?php include 'nav.php'; ?>




		<div id="page-wrapper">
		  <div class="header">
                        <h1 class="page-header">
                            Welcome <small><?php echo "$_SESSION[user]"; ?></small>
                        </h1>
						<ol class="breadcrumb">
  					  <li><a href="#">Home</a></li>
  					  <li><a href="#">Library</a></li>
  					  <li class="active">Data</li>
  					</ol>

		</div>
            <div id="page-inner">

                <!-- /. ROW  -->

                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <a href="setor.php">
                        <div class="panel panel-primary text-center no-boder blue">
                            <div class="panel-left pull-left blue">
                                <i class="fa fa-tasks fa-5x"></i>

                            </div>
                            <div class="panel-right">
								               <h3>Setor</h3>
                               <!-- <strong> Daily Visits</strong> -->
                            </div>
                        </div>
                      </a>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <a href="#">
                        <div class="panel panel-primary text-center no-boder blue">
                              <div class="panel-left pull-left blue">
                                <i class="fa fa-shopping-cart fa-5x"></i>
								              </div>

                            <div class="panel-right">
							                  <h3>Tarik</h3>

                            </div>
                        </div>
                      </a>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                      <a href="#">
                        <div class="panel panel-primary text-center no-boder blue">
                            <div class="panel-left pull-left blue">
                                <i class="fa fa fa-print fa-5x"></i>

                            </div>
                            <div class="panel-right">
							                  <h3>Print</h3>

                            </div>
                        </div>
                      </a>
                    </div>

                </div>

                









                <!-- <div class="">
                  <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p>


                  </footer>
                </div> -->
            </div>
            <!-- /. PAGE INNER  -->


        </div>
        <!-- /. PAGE WRAPPER  -->

    </div>
    <!-- /. WRAPPER  -->
    <?php include 'footer.php'; ?>

</body>

</html>
