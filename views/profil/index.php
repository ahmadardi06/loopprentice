<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Loopprentice</title>
    <link rel="shortcut icon" href="libs/home_register/img/LogoLoop.png" type="libs/home_register/image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="libs/dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="libs/dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="libs/dashboard/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="libs/dashboard/css/sb-admin.css" rel="stylesheet">
  <?php
    if($teamname == null) {
      $teamname = "UNKNOWN";
    }
  ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    
    <a class="navbar-brand" href="?page=home_prentice&action=index">Loopprentice</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="?page=privatearea_prentice&action=index">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Excel">
        <a class="nav-link" data-toggle="modal" data-target="#salesModal">
<!--          <a class="nav-link" href="?page=privatearea_prentice&action=addsales">-->
            <i class="fa fa-fw fa-upload"></i>
            <span class="nav-link-text">Upload Excel</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Posting">
          <a class="nav-link" href="?page=privatearea_posting&action=index">
            <i class="fa fa-fw fa-pencil-square"></i>
            <span class="nav-link-text">Posting</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profil User">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Profil</span>
          </a>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Loopprentice</a>
          </li>
          <li class="breadcrumb-item active">User Profil</li>
        </ol>

        <!-- update profil -->
        <div class="row">
          <div class="col-lg-12">
            <h2 style="color: #343A40"><i class="fa fa-fw fa-user"></i> Edit Profil</h2>
            
          </div>
          
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xm-12">
                <div class="form-group">
                    <img src="http://via.placeholder.com/300x300" alt="..." class="img-thumbnail" style="width: 300px;width: 300px">
                    
                    <input type="file" accept=".png, .jpg, .jpeg" name="profilephoto" placeholder="Foto" class="f1-last-name form-control" id="profilephoto">
                </div>  
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xm-12">
                <h5>Data Diri</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-first-name">Nama Lengkap</label>
                    <input type="text" name="fullname" placeholder="Nama Lengkap" class="f1-first-name form-control" id="fullname">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Tanggal lahir</label>
                    <input type="text" name="birthdaydate" placeholder="Tanggal Lahir (yyyy-mm-dd)" class="f1-last-name form-control" id="birthdaydate">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Tempat lahir</label>
                    <input type="text" name="birthdayplace" placeholder="Tempat lahir" class="f1-last-name form-control" id="birthdayplace">
                </div>
                <div class="form-group" id="bloodhound-city">
                    <label class="sr-only" for="f1-about-yourself">Domisili</label>
                    <input type="text" name="dominantcity" placeholder="kota Domisili" class="f1-last-name form-control typeahead" id="dominantcity">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-about-yourself">No Handphone</label>
                    <input type="text" name="contactphone" placeholder="Nomor HP: 62xxxxxxxxxx" class="f1-last-name form-control" id="contactphone">
                </div>
                <div class="form-group" id="bloodhound-city">
                    <label class="sr-only" for="f1-about-yourself">Lokasi magang</label>
                    <input type="text" name="apprenticecity" placeholder="Lokasi magang" class="f1-last-name form-control typeahead" id="apprenticecity">
                </div>
                
                <br>    
                <h5>Akun</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-email">Email</label>
                    <input type="email" name="email" placeholder="Email" class="f1-email form-control" id="email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-first-name">User Name</label>
                    <input type="text" name="username" placeholder="User Name" class="f1-first-name form-control" id="username">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-password">Password</label>
                    <input type="password" name="password" placeholder="Password" class="f1-password form-control" id="password">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-password">Confirm Password</label>
                    <input type="password" name="con_password" placeholder="Confirm Password" class="f1-password form-control" id="con_password">
                </div>   

                <button type="submit" class="btn btn-lg btn-success">Simpan</button> 
                <button class="btn btn-lg btn-danger">Cancel</button>
                <br><br>
          </div>

          
        </div>    
        <!--end update profil -->

        <footer class="sticky-footer">
          <div class="container">
            <div class="text-center">
              <small>copyright 2017 by Youth and Comunity Jawa Bali Nusra</small>
            </div>
          </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Yakin Ingin Keluar?</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="?page=logout_prentice&action=destroy">Logout</a>
              </div>
            </div>
          </div>
        </div>

    </div><!-- /.container-fluid-->
  </div><!-- /.content-wrapper-->
</body>
  <!-- Bootstrap core JavaScript-->
  <script src="libs/dashboard/vendor/jquery/jquery.min.js"></script>
  <script src="libs/dashboard/vendor/popper/popper.min.js"></script>
  <script src="libs/dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="libs/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Page level plugin JavaScript-->
  
  <!-- Custom scripts for all pages-->
  <script src="libs/dashboard/js/sb-admin.min.js"></script>
  <!-- Custom scripts for this page-->
  
  

<!--  validasi-->
  <script src="libs/js/bloodhound.js"></script>
  <script src="libs/js/typeahead.bundle.min.js"></script>
  <script src="libs/js/typeahead.jquery.js"></script>
  <script src="libs/js/slick.js"></script>
  <script src="libs/vendor/popper/popper.min.js"></script>
  <script src="libs/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="libs/vendor/bootstrap/js/bootstrap-validator/bootstrapValidator.min.js"></script>
  <script src="libs/vendor/bootstrap/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="libs/vendor/bootstrap/js/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
  <script src="libs/vendor/bootstrap/js/bootbox/bootbox.min.js"></script>
  <script type="text/javascript">
      var ar_ext = ['xls', 'xlsx'];        // array with allowed extensions

      function checkName(el, to, sbm) {
          // get the file name and split it to separe the extension
          var name = el.value;
          var ar_name = name.split('.');

          // for IE - separe dir paths (\) from name
          var ar_nm = ar_name[0].split('\\');
          for(var i=0; i<ar_nm.length; i++) var nm = ar_nm[i];

          // add the name in 'to'
//          document.getElementById(to).value = nm;

          // check the file extension
          var re = 0;
          for(var i=0; i<ar_ext.length; i++) {
              if(ar_ext[i] == ar_name[1]) {
                  re = 1;
                  break;
              }
          }

          // if re is 1, the extension is in the allowed list
          if(re==1) {
              // enable submit
              document.getElementById(sbm).disabled = false;
          }
          else {
              // delete the file name, disable Submit, Alert message
              el.value = '';
              document.getElementById(sbm).disabled = true;
              alert('Upload file Excel');
          }
      }
    </script>
</html>
