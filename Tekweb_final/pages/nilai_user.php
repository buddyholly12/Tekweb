<?php 
    include('functions.php');

    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
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

    <title>Doge_programming_quiz</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

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
                <a class="navbar-brand" href="blank.php">Doge_programming_quiz</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    </a>
                   </li>
               </ul>
                <!-- /.dropdown -->
                
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="blank.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-pencil-square-o"></i> Quiz<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="quiz_panel.php">Algorithm and Programming</a>
                                </li>
                                <li>
                                    <a href="#"class="btn btn-link disabled">Object Oriented Programming </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Profile<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-user fa-fw"></i>Edit profile</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-th-list"></i> View Ranks</a>
                                </li>
                                 <li>
                                    <a href="nilai_user.php"> <i class="fa fa-th-list"></i> View Score</a>
                                </li>
                                <li>
                                    <a href="main.php?logout='1'"><i class="fa fa-sign-out fa-fw"></i> Sign out</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
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
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content">
                             <div class="col-xs-12 col-md-8">
                                        <div class="form-group">
                                            <?php

                        $nama= $_SESSION['user']['username'];
                 $result = mysqli_query($db,"SELECT username,skor From Result WHERE username='$nama'");
                        echo "
                            <div class='panel-body'>
                            <div class='table-responsive'>
                            <table class='table table-hover'>
                            <thead>
                            <tr>
                            <th align='center''>Username</th>
                            <th align='center''>Nilai </th>
                            </tr>
                            </thead>";

                    while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td '>" . $row['username'] . "</td>";
                            echo "<td '>" . $row['skor'] . "</td>";
                            echo "</tr>";
                            }   
                echo "</table></center>";
                    ?>
                               
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
