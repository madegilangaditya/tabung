  <!--/. NAV TOP  -->
<nav class="navbar navbar-default top-navbar" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><strong>bluebox</strong></a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>

                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
</nav>

<!-- /. NAV SIDE  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div id="sideNav"></div>
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-user"></i> Data Nasabah<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                  <li>
                      <a href="tambah-nasabah.php">Tambah Nasabah</a>
                  </li>
                  <li>
                      <a href="tutup-tabungan.php">Tutup Tabungan</a>
                  </li>
                  <li>
                      <a href="#">Lihat Nasabah</a>
                  </li>

              </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Transaksi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="setor.php">Setoran</a>
                    </li>
                    <li>
                        <a href="penarikan.php">Penarikan</a>
                    </li>
                    <li>
                        <a href="print-tab.php">Print Tabungan</a>
                    </li>

                </ul>
            </li>

        </ul>

    </div>

</nav>
