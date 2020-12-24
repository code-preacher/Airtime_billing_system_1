<?php session_start(); ?>
<?php 
  include './include/mysqldb.php';
  $a=$_SESSION['user'];
  $q=mysqli_query($db,"select title,name,passkey,mobile,email  from user_data where email='$a'");
 $qw=mysqli_fetch_assoc($q);
 $qt=$qw['mobile'];
 $qx=mysqli_query($db,"select bal from balance where mobile='$qt'");
 $qp=mysqli_fetch_assoc($qx);
 $xp=$qp['bal'];
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
      <meta name="author" content="Łukasz Holeczek">
      <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
      <title>Phone Billing System</title>
      <!-- Icons-->
      <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
      <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
      <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
      <!-- Main styles for this application-->
      <link href="css/style.css" rel="stylesheet">
      <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
      <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
          <span class="navbar-toggler-icon"></span>
        </button>
        &nbsp;&nbsp; <a class="navbar-brand" href="#">
    <?php echo "(Hello ".$qw['name'].")"."<br/>&nbsp;Bal:₦".$xp; ?>
        </a>
      </header>
      <div class="app-body">
        <div class="sidebar">
          <nav class="sidebar-nav">
           <ul class="nav">
              <li class="nav-item">
                 <a class="nav-link" href="index.php">
                  <i class="nav-icon icon-speedometer"></i> Home
                </a>
              </li>
          <li class="nav-item">
                <a class="nav-link" href="order.php">
                  <i class="nav-icon icon-drop"></i>Make Call
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="order2.php">
                  <i class="nav-icon icon-drop"></i>Send SMS
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="order3.php">
                  <i class="nav-icon icon-drop"></i>Browse
                </a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="complian.php">
                  <i class="nav-icon icon-drop"></i>Make Complain
                </a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link" href="dst.php">
                  <i class="nav-icon icon-drop"></i>Recharge Stats
                </a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="dst2.php">
                  <i class="nav-icon icon-drop"></i>Call History
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="dst3.php">
                  <i class="nav-icon icon-drop"></i>SMS History
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="dst4.php">
                  <i class="nav-icon icon-drop"></i>Browsing History
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="cpass.php">
                  <i class="nav-icon icon-drop"></i>Change Password
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./logout.php">
                  <i class="nav-icon icon-pencil"></i> Logout
                </a>
              </li>
            </ul>
          </nav>
          <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main" style="padding-top:15px;">
          <!-- Breadcrumb-->

          <div class="container-fluid">
            <div class="animated fadeIn">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header">
                      <strong>Browse @ ₦1 per seconds</strong>
                      <small></small>
                    </div>
                    <div class="card-body">
                      <form  action="add2.php" method="post">
                        
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="">Website Name</label>
                              <input type="text" name="wb" class="form-control" id="dob"  placeholder="ex: www.google.com" required>
                            </div>
                          </div>
                        </div>
                        <!--/.row-->

						
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="ccnumber">Browse Duration (in seconds)</label>
                              <input type="number" name="dr" class="form-control" id="dob"  required>
                            </div>
                          </div>
                        </div>
                        

                        <div class="row">
                          <div class="col-sm-12">
                            <input type="submit" name="bb" value="BROWSE" class="btn btn-primary btn-lg">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <!--/.col-->
                <div class="col-sm-6">
                 
                  </div>
                </div>
                <!--/.col-->
              </div>

            </div>

          </div>
        </main>

      </div>

      <footer class="app-footer">
        <div>
          <span>&copy; 2018 Final Year project.</span>
        </div>
      </footer>
      <!-- Bootstrap and necessary plugins-->
      <script src="node_modules/jquery/dist/jquery.min.js"></script>
      <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="node_modules/pace-progress/pace.min.js"></script>
      <script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
      <script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
    </body>
  </html>

