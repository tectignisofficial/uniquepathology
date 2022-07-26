<?php 
include('include/config.php');

if(isset($_POST['home1']))
{
    $banner_heading=$_POST['banner_heading'];
    $banner_content=$_POST['banner_content'];
    $file=$_FILES['file']['name'];   
    $filedet=$_FILES['file']['tmp_name'];
    $loc="dist/img/gallery/".$file;
    move_uploaded_file($filedet,$loc);
    $sql="UPDATE general_setting SET gallery_img='$file', banner_heading='$banner_heading', banner_content='$banner_content' where id ='1'";
    if (mysqli_query($conn, $sql)){
   } 
   else {
      echo "<script> alert ('connection failed !');</script>";
   }
}

if(isset($_POST['home2']))
{
    $banner_heading=$_POST['banner_heading'];
    $banner_content=$_POST['banner_content'];
    $filee=$_FILES['file']['name'];   
    $filedet=$_FILES['file']['tmp_name'];
    $loc="dist/img/gallery/".$filee;
    move_uploaded_file($filedet,$loc);
    $sql="UPDATE general_setting SET gallery_img='$filee', banner_heading='$banner_heading', banner_content='$banner_content' where id ='2'";
    if (mysqli_query($conn, $sql)){
      
   }
    else {
      echo "<script> alert ('connection failed !');</script>";
   }
}

if(isset($_POST['home3']))
{
    $banner_heading=$_POST['banner_heading'];
    $banner_content=$_POST['banner_content'];
    $fileee=$_FILES['file']['name'];   
    $filedet=$_FILES['file']['tmp_name'];
    $loc="dist/img/gallery/".$fileee;
    move_uploaded_file($filedet,$loc);
    $sql="UPDATE general_setting SET gallery_img='$fileee', banner_heading='$banner_heading', banner_content='$banner_content' where id ='3'";
    if (mysqli_query($conn, $sql)){
   } 
   else {
      echo "<script> alert ('connection failed !');</script>";
   }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Banner</title>

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php include("include/header.php")?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include("include/sidebar.php")?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Images</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Banner</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->


      <!-- home -->
      <section class="content ">
        <div class="container-fluid">
          <section class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Index Image 1</h3>

                    <!-- <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div> -->
                  </div>
                  <form method="post" enctype="multipart/form-data" action="">
                    <div class="card-body">
                      <?php  
                        $sql=mysqli_query($conn,"select * from general_setting where id='1'");   
                        while($arr=mysqli_fetch_array($sql)){
                      ?>
                      <div class="col-12">
                      <label for="">Banner Heading 1</label>
                    </div>
                    <div class="col-12">
                      <input type="text" class="form-control" value="<?php echo $arr['banner_heading'];?>" placeholder="Banner Heading 1" name="banner_heading">
                      </div>
                      <div class="col-12">
                      <label for="">Banner Content 1</label>
                    </div>
                    <div class="col-12">
                      <input type="text" class="form-control" value="<?php echo $arr['banner_content'];?>" placeholder="Banner Content 1" name="banner_content">
                      
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputName">Existing Banner Image</label>
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                          <img class="card-img-top" src="dist/img/gallery/<?php echo $arr['gallery_img'];?>" alt="file">
                          <div class="card-img-overlay d-flex flex-column justify-content-end">
                          </div>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="form-group col-md-12">
                          <label for="inputName">New Banner Image</label>
                        </div>

                        <div class="custom-file">
                          <input type="file" name="file" class="custom-file-input" id="formFileMultiple">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group" style="margin-top:2%">
                          <input type="submit" name="home1" value="submit" class="btn btn-success ">
                        </div>

                      </div>
                      <?php }  ?>
                    </div>
                  </form>
                </div>

                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
        </div>
      </section>
      <section class="content ">
        <div class="container-fluid">
          <section class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Index Image 2</h3>

                    <!-- <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div> -->
                  </div>
                  <form method="post" enctype="multipart/form-data" action="">
                    <div class="card-body">
                      <?php  
                        $sql=mysqli_query($conn,"select * from general_setting where id='2'");   
                        while($arr=mysqli_fetch_array($sql)){
                      ?>
                      <div class="col-12">
                      <label for="">Banner Heading 2</label>
                          <input type="text" class="form-control" name="banner_heading" placeholder="Banner Heading 2" value="<?php echo $arr['banner_heading'];?>">
                      </div>
                      <div class="col-12">
                      <label for="">Banner Content 2</label>
                          <input type="text" class="form-control" name="banner_content" placeholder="Banner Content 2" value="<?php echo $arr['banner_content'];?>">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputName">Existing Banner Image</label>
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                          <img class="card-img-top" src="dist/img/gallery/<?php echo $arr['gallery_img'];?>" alt="file">
                          <div class="card-img-overlay d-flex flex-column justify-content-end">
                          </div>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="form-group col-md-12">
                          <label for="inputName">New Banner Image</label>
                        </div>

                        <div class="custom-file">
                          <input type="file" name="file" class="custom-file-input" id="formFileMultiple">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group" style="margin-top:2%">
                          <input type="submit" name="home2" value="submit" class="btn btn-success ">
                        </div>

                      </div>
                      <?php }  ?>
                    </div>
                  </form>
                </div>

                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
        </div>
      </section>
      <section class="content">
        <div class="container-fluid">
          <section class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Index Image 3</h3>

                    <!-- <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div> -->
                  </div>
                  <form method="post" enctype="multipart/form-data" action="">
                    <div class="card-body">
                      <?php  
                        $sql=mysqli_query($conn,"select * from general_setting where id='3'");   
                        while($arr=mysqli_fetch_array($sql)){
                      ?>
                      <div class="col-12">
                      <label for="">Banner Heading</label>
                          <input type="text" class="form-control" name="banner_heading" placeholder="Banner Heading 3" value="<?php echo $arr['banner_heading'];?>">
                      </div>
                      <div class="col-12">
                      <label for="">Banner Content</label>
                          <input type="text" class="form-control" name="banner_content" placeholder="Banner Content 3" value="<?php echo $arr['banner_content'];?>">
                      </div>
                      <div class="form-group col-md-12">
                        <label for="inputName">Existing Banner Image</label>
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                          <img class="card-img-top" src="dist/img/gallery/<?php echo $arr['gallery_img'];?>" alt="file">
                          <div class="card-img-overlay d-flex flex-column justify-content-end">
                          </div>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="form-group col-md-12">
                          <label for="inputName">New Banner Image</label>
                        </div>

                        <div class="custom-file">
                          <input type="file" name="file" class="custom-file-input" id="formFileMultiple">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group" style="margin-top:2%">
                          <input type="submit" name="home3" value="submit" class="btn btn-success ">
                        </div>

                      </div>
                      <?php }  ?>
                    </div>
                  </form>
                </div>

                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
        </div>
      </section>
      <!-- home -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("include/footer.php")?>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->

  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
                          <!-- font awsome  -->
  <script src="https://kit.fontawesome.com/467f9d214f.js" crossorigin="anonymous"></script>





</body>

</html>
