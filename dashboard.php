<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include 'component/head.php'; ?>
    <link rel="stylesheet" href="bootstrap/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="bootstrap/assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>

<body>
   
    <!-- Left Panel -->
    <?php include 'component/menu.php'; ?>
    <!-- /#left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php include 'component/header.php'; ?>
        <!-- /#header -->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">Basic</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->		
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Verifikasi Aspirasi</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="avatar">Avatar</th>
                                            <th>ID</th>
                                            <th>Nama Lengkap</th>
                                            <th>Aspirasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

<?php 
    require 'config/db.php';
    $query = mysqli_query($conn, "SELECT * FROM aspirasi ");
                        while($array = mysqli_fetch_array($query)){
                          echo '

                                    <tbody>
                                        <tr>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="proses/images/'.$array['foto'].'"  alt=""></a>
                                                </div>
                                            </td>
                                            <td> '.$array['idAspirasi'].' </td>
                                            <td>  <span class="name">'.$array['namaLengkap'].'</span> </td>
                                            <td> <span class="name">'.$array['textAspirasi'].'</span> </td>
                                            <td>
                                                <span><a href="proses/approveAspirasi.php?idAspirasi='.$array['idAspirasi'].'"><button type="submit" class="btn btn-primary btn-sm">Approve</button></a></span>
                                                <span><a href="formEdit-Aspirasi.php?idAspirasi='.$array['idAspirasi'].'"><button type="submit" class="btn btn-warning btn-sm">Edit</button></a></span>
                                                <span><a href="proses/hapusAspirasi.php?idAspirasi='.$array['idAspirasi'].'"><button type="button" class="btn btn-danger btn-sm">Delete</button></a></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    ' ; } ?>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>

                <div class="clearfix"></div> 
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->

        <div class="clearfix"></div>
        
        <!-- Footer -->
        <?php include 'component/footer.php'; ?>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <script src="bootstrap/assets/js/main.js"></script>
    <script src="bootstrap/assets/js/init/fullcalendar-init.js"></script>
    <?php include ('component/ending.php'); ?>

</body>
</html>
