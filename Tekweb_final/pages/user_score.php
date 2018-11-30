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
                            <a href="#"><i class="fa fa-pencil-square-o"></i> Quiz<span class="fa arrow"></span></a>
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
                                    <a href="index.php?logout='1'"><i class="fa fa-sign-out fa-fw"></i> Sign out</a>
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
                        <h1 class="page-header">Your score </h1>
                    </div>

      <?php
      $loops=0;
      //$waktu=$_POST['time'];
      $nama=$_SESSION['user']['username'];
      $num1=$_POST['no1'];
      $num2=$_POST['no2'];
      $num3=$_POST['no3'];
      $num4=$_POST['no4'];
      $num5=$_POST['no5'];
      $num6=$_POST['no6'];
      $data1="SELECT jawaban From DETAIL_SOAL WHERE id=1";
      $data2="SELECT jawaban From DETAIL_SOAL WHERE id=2";
      $data3="SELECT jawaban From DETAIL_SOAL WHERE id=3";
      $data4="SELECT jawaban From DETAIL_SOAL WHERE id=4";
      $data5="SELECT jawaban From DETAIL_SOAL WHERE id=5";
      $data6="SELECT jawaban From DETAIL_SOAL WHERE id=6";

      $result=mysqli_query($db,$data1);
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
      //printf ("%s \n",$row["jawaban"]);
      $result=mysqli_query($db,$data2);
      $row1=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $result=mysqli_query($db,$data3);
      $row2=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $result=mysqli_query($db,$data4);
      $row3=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $result=mysqli_query($db,$data5);
      $row4=mysqli_fetch_array($result,MYSQLI_ASSOC);
      $result=mysqli_query($db,$data6);
      $row5=mysqli_fetch_array($result,MYSQLI_ASSOC);
      //echo "$num1";
      $totalCorrect=0;
      if((string)$num1===(string)$row["jawaban"] ){ ++$totalCorrect; }
      if((string)$num2==(string)$row1["jawaban"] ){ ++$totalCorrect; }
      if((string)$num3==(string)$row2["jawaban"] ){ ++$totalCorrect; }
      if((string)$num4==(string)$row3["jawaban"] ){ ++$totalCorrect; }
      if((string)$num5==(string)$row4["jawaban"] ){ ++$totalCorrect; }
      if((string)$num6==(string)$row5["jawaban"] ){ ++$totalCorrect; }


      echo "<div id='results'> Your Score :</div>";
      echo "<div id='results'>$totalCorrect / 6 correct</div><br>";
      $true=0;
      $true=$totalCorrect*20;
      echo "<div id='results'>$true</div>";
      $total="INSERT INTO result(username,skor) values ('$nama','$true')";
      $hasil=mysqli_query($db,$total);
      ?>
    </div>
  </div>
</div>

