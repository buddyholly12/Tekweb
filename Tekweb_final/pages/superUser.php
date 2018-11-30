<?php 
    include('functions.php');

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    $query = "UPDATE Users SET username='$username' WHERE username='$username'";
    $results = mysqli_query($db, $query);
    $query1 = "SELECT * FROM users WHERE username='$username' " ;
    $results1 = mysqli_query($db, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Super User Panel </title>

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
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button"">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="main.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                            <!-- /.nav-second-level -->
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Privillege and Topics<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">SuperUser</a>
                                </li>
                                <li>
                                    <a href="main.php">Admin</a>
                                </li>
                                <li>
                                    <a href="#">User</a>
                                </li>
                                </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-users"></i>Admin's Page<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="Admin_register.php">Admin's Privillege </a>
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
                    <h1 class="page-header">Dashboard</h1>
                         <div class="col-xs-12 col-md-8">
                                        <div class="form-group">
                                            <?php
                 $result = mysqli_query($db,"SELECT * From Users ");
                        echo "
                            <div class='panel-body'>
                            <div class='table-responsive'>
                            <table class='table table-hover'>
                            <thead>
                            <tr>
                            <th align='center''>Username</th>
                            <th align='center''>E-mail</th>
                            <th align='center''>Hak akses</th>
                            </tr>
                            </thead>";

                    while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td '>" . $row['username'] . "</td>";
                            echo "<td '>" . $row['email'] . "</td>";
                            echo "<td '>" . $row['user_type'] . "</td>";
                            echo "</tr>";
                        }   
                echo "</table></center>";
                ?>
             </div>
                <div class="col-md-9 .col-md-push-3">
                    <div class="panel panel-red" >
                        <div class="panel-heading" style="text-align: center;">
                             Super User Privilege
                        </div>
                        <div class="panel-body">
                            <ol>
                                <li>Membuat Registrasi Untuk hak akses Administrator</li>
                                <li>Mengontrol Data pendaftar yang masuk kedalam Database</li>
                            </ol>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>


                    <div class="col-md-9 .col-md-push-3">
                    <div class="panel panel-info">
                        <div class="panel-heading" style="text-align: center;">
                            Admin's User
                        </div>
                        <div class="panel-body">
            <?php
                 $result = mysqli_query($db,"SELECT * From Users where user_type='admin'");
                        echo "
                            <div class='panel-body'>
                            <div class='table-responsive'>
                            <table class='table table-hover'>
                            <thead>
                            <tr>
                            <th align='center''>Username</th>
                            <th align='center''>E-mail</th>
                            <th align='center''>Hak akses</th>
                            </tr>
                            </thead>";
                    while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td '>" . $row['username'] . "</td>";
                            echo "<td '>" . $row['email'] . "</td>";
                            echo "<td '>" . $row['user_type'] . "</td>";
                            echo "</tr>";
                        }   
                echo "</table></center>";
                ?>   
                </div>
                    </div>  
                    </div>
                </div>
                    <!-- notification message -->
        
                <!-- /.col-lg-12 -->

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
