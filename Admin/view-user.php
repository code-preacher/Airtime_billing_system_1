<?php session_start(); ?>
<?php if (isset($_SESSION['admin'])):
  include './include/mysqldb.php';

  $q = $db->prepare("select title,name,passkey,mobile,email  from user_data order by id");
  $q->execute();
  $q->store_result();
  $n = $q->num_rows;
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>
	  project
	  </title>
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
        <a class="navbar-brand" href="#">
          Admin
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
                <a class="nav-link" href="view-user.php">
                  <i class="nav-icon icon-drop"></i>View Customer
                </a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="dst4.php">
                  <i class="nav-icon icon-drop"></i>Call History
                </a>
              </li>
			   <li class="nav-item">
                <a class="nav-link" href="dst33.php">
                  <i class="nav-icon icon-drop"></i>SMS History
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="dst44.php">
                  <i class="nav-icon icon-drop"></i>Browsing History
                </a>
              </li>
			      <li class="nav-item">
                <a class="nav-link" href="dst.php">
                  <i class="nav-icon icon-drop"></i>Generated Numbers
                </a>
              </li>
			   
              			   <li class="nav-item">
                <a class="nav-link" href="dst2.php">
                  <i class="nav-icon icon-pencil"></i> Recharge Cards
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="dst3.php">
                  <i class="nav-icon icon-pencil"></i> Customer Recharge
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="complian.php">
                  <i class="nav-icon icon-drop"></i>View Complain
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="cpass.php">
                  <i class="nav-icon icon-drop"></i>Change Password
                </a>
              </li>
			 
			  <li class="nav-item">
                <a class="nav-link" href="delete.php">
                  <i class="nav-icon icon-drop"></i>Delete
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
                <div class="col-md-8 col-md-offset-2">
                  <div class="card">
                    <div class="card-header">
                      <strong>Customer Record</strong>
                      <small></small>
                    </div>
                    <div class="card-body">
                      <?php if ($n > 0):
                          $q->bind_result($t, $n, $p, $m, $e);
                          $c = 1;
                      ?>
                        <table class="table  table-bordered">
                         
                            <tr>
                              <th>S/N</th>
                              <th>Title</th>
                              <th>Name</th>
                               <th>Password</th>
							    <th>Mobile</th>
								<th>Email</th>
                            </tr>
                          
                          
                            <?php while ($q->fetch()): ?>
                              <tr>
                                <td> <?php echo $c; $c++; ?> </td>
                                <td> <?php echo $t; ?> </td>
                                <td> <?php echo $n; ?> </td>
                             <td> <?php echo $p; ?> </td>
							 <td> <?php echo $m; ?> </td>
							 <td> <?php echo $e; ?> </td>
                              </tr>
                            <?php endwhile; ?>
                          
                        </table>
                      <?php else: ?>
                        <h3>There are no users on this System at the moment.</h3>
                      <?php endif; $q->close(); $db->close(); ?>
                    </div>
                  </div>
                </div>
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

<?php else:
  header("Location:logout.php");
  exit;
?>
<?php endif; ?>
