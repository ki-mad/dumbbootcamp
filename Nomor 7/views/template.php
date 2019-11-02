<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>News</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">


    <div class="wrapper">
      <header class="main-header">
          <a href="<?=base_url('dashboard')?>" class="logo">
              <span class="logo-mini"><b>NWS</b></span>
              <span class="logo-lg"><b>N</b>EWS</span>
          </a>
          <nav class="navbar navbar-static-top">
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </a>
              <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                      <li class="dropdown user user-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <!-- <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                              <span class="hidden-xs"></span>
                          </a>
                          <ul class="dropdown-menu">
                              <li class="user-header">
                                  <!-- <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
                                 
                              </li>
                              <li class="user-footer">
                                  <!-- <div class="pull-left">
                                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                                  </div> -->
                                  <div class="pull-right">
                                      <a href="<?=site_url('auth/logout')?>" class="btn btn-flat bg-red">Sign out</a>
                                  </div>
                              </li>
                          </ul>
                        </li>
                  </ul>
                </div>
          </nav>
      </header>

      <!-- Left side column -->
      <aside class="main-sidebar">
        <section class="sidebar">
           
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
		            <li>
			              <a href="<?=site_url('dashboard')?>"><i class="fa fa-home"></i> <span>Halaman Utama</span></a>
		            </li>
                 <li <?=$this->uri->segment(1) == 'news' ? 'class="active"' : ''?>>
                  <a href="<?=site_url('news')?>"><i class="fa fa-book"></i> <span>News</span></a>
                </li>
                <li class="header">PENGATURAN</li>
                <li <?=$this->uri->segment(1) == 'user' ? 'class="active"' : ''?>>
                  <a href="<?=site_url('user')?>"><i class="fa fa-users"></i> <span>Users</span></a>
                </li>
                
            </ul>
        </section>
      </aside>

      <!-- Content Wrapper -->
      <div class="content-wrapper">
            <?php echo $contents ?> 
      </div>

      <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
          </div>
          <strong>Copyright &copy; 2019 <a href="">Rizki Ahmad Sugondo</a>.</strong> Politeknik STMI Jakarta.
      </footer>
    </div>

    <script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/datatables.net/buttons/1.5.6/js/buttons.jqueryui.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/bower_components/datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#mytable').DataTable()
        $('#mytable1').DataTable({
                "paging":   false,
                "ordering": false,
                "info":     false,
                "searching": false,
              });
    })
    </script>
    <script>
        $(document).ready(function() {
            $('#hasil').DataTable( {
                "paging":   false,
                "ordering": false,
                "info":     false,
                "searching": false,
                dom: 'Bfrtip',  
            buttons: [  
            'copy', 'csv', 'excel', 'pdf', 'print'  ]
            });
        } );
    </script>
</body>
</html>