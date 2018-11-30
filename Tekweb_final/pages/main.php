<?php 
    include('functions.php');

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Admin Panel </title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin panel Controlling </a>
            </div>
            <!-- /.navbar-header -->
 
            <ul class="nav navbar-top-links navbar-right">
               
                       
           
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a  href="main.php?logout='1'"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <form>
                            <div class="input-group custom-search-form">
                               
                                <input type="text" class="form-control" placeholder="Search here " name="username">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            
                            </span>
                        </form>
                            </div>

                            <!-- /input-group -->
                        </li>

                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="Report_data.php"><i class="fa fa-edit fa-fw"></i>Laporan data dan Nilai </a>
                        </li>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Privillege and Topics<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="SuperUser.php">SuperUser</a>
                                </li>
                                <li>
                                    <a href="#">User</a>
                                </li>
                                <li>
                                    <a href="#">Topics<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Algorithm and programming<span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                      <a href="add_soal.php"><i class="fa fa-plus"></i>&nbspTambah Soal</a>
                                                      <a href="#"><i class="fa fa-minus"></i>&nbspHapus Soal </a>
                                                      <a href="#"><i class="fa fa-edit"></i>&nbspEdit Soal</a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li>
                                        <a href="#">Object Oriented Programming <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                      <a href="#"><i class="fa fa-plus"></i>&nbspTambah Soal</a>
                                                      <a href="#"><i class="fa fa-minus"></i>&nbspHapus Soal </a>
                                                      <a href="#"><i class="fa fa-edit"></i>&nbspEdit Soal</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Laman<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.php">User page</a>
                                </li>
                                <li>
                                    <a href="login.php">Login Page</a>
                                </li>
                                <li>
                                    <a href="register.php">Register Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Admin's Dashboard</h1>
                    <!-- notification message -->
                      <div class="col-md-9 .col-md-push-3">
                        <div class="panel panel-red">
                        <div class="panel-heading" style="text-align: center;">
                              <strong> Hello My name Is <?php echo $_SESSION['user']['username']; ?></strong>
                              I'm As <i  style="color:white;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i></h1>
                        </div>
                            <div class="panel-body">
                            <h3>Admin Privilege:</h3>
                            <ol>
                                <li> mengatur Dan mengedit Halaman</li>
                                <li> Mengatur laporan data dan skor</li>
                                <li> Mendapatkan fitur super user untuk Menanbahkan anggota administrator</li>
                                <li> Mendapatkan hak akses untuk menambah dan menghapus soal pada quiz </li>
                                <li> Mengatur tampilan antar muka (User interface) </li>
                            </ol>
                        </div>
                        <div class="panel-footer">
                           &copy Doge Algorithm Programming Quiz &middot;
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
           <div class="col-md-9 .col-md-push-3">
                    <div class="panel panel-info" >
                        <div class="panel-heading" style="text-align: center;">
                             User Account Data and Privilege
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                            <?php
                 $result = mysqli_query($db,"SELECT * From Users where user_type='user'");
                        echo "
                            <div class='panel-body'>
                            <div class='table-responsive'>
                            <table class='table table-hover'>
                            <thead>
                            <tr>
                             <th align='center''>id</th>
                            <th align='center''>Username</th>
                            <th align='center''>E-mail</th>
                            <th align='center''>Hak Akses</th>
                            </tr>
                            </thead>";

                    while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                             echo "<td '>" . $row['id'] . "</td>";
                            echo "<td '>" . $row['username'] . "</td>";
                            echo "<td '>" . $row['email'] . "</td>";
                            echo "<td '>" . $row['user_type'] . "</td>";
                            echo "</tr>";
                            }   
                echo "</table></center>";
                    ?>
                    </div>
                      
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
            </div>


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
