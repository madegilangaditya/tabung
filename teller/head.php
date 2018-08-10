<head>
    <?php
      session_start();
      include '../koneksi.php';
      if ($_SESSION['user']==""  && $_SESSION['oto']!=1) {
        // code...
        header('location:../index.php');
      }
    ?>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bluebox Free Bootstrap Admin Template</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">
    <!-- jQuery Js -->
    <!-- JS Scripts-->

    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <style media="screen">
      #det{
        margin-bottom:0px;
      }

      .right{
        margin-right: 10px;
        float:right;
      }
    </style>
</head>
