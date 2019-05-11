<!DOCTYPE html>
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
                                    <li class="active">Aspirasi</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Form Aspirasi</strong>
                            </div>
                            <div class="card-body card-block">
    <?php
    include 'config/db.php';
    $id = $_GET['idAspirasi'];
    $query = mysqli_query($conn,"SELECT * FROM aspirasi WHERE idAspirasi='$id'");
    while($data = mysqli_fetch_array($query)){
        ?>
                                <form action="proses/editAspirasi.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">ID</label></div>
                                       <div class="col-12 col-md-9"><input type="text" id="idAspirasi" name="idAspirasi" value="<?php echo $data['idAspirasi']; ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Lengkap</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="namaLengkap" name="namaLengkap" value="<?php echo $data['namaLengkap']; ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Aspirasi</label></div>
                                        <div class="col-12 col-md-9"><textarea name="textAspirasi" id="textAspirasi" rows="9" class="form-control"><?php echo $data['textAspirasi']; ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Foto</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file" name="file" class="form-control-file"><small class="form-text text-muted">.jpg or .png</small></div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm" name="submit" id="sumbit">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form> 
                    <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        
        <!-- Footer -->
        <?php include 'component/footer.php'; ?>

    </div>

    <script src="bootstrap/assets/js/main.js"></script>
    <script src="bootstrap/assets/js/init/fullcalendar-init.js"></script>
    <?php include ('component/ending.php'); ?>

</body>
</html>
