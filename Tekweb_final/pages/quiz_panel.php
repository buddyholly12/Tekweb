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
                            <a href="forms.html"><i class="fa fa-pencil-square-o"></i> Quiz<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="quiz_panel.php">Algorithm and Programming</a>
                                </li>
                                <li>
                                    <a href="#">Object Oriented Programming </a>
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

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Algorithm and programming quiz</h1>
                    </div>
                        <div class="col-lg-12">
                            <div class="alert alert-info">
                                Waktu Anda :<span id="time">05:00</span> minutes!</a>.
                            </div>
                        </div>
 <form action="user_score.php" method="post">
  <ol>
  <li><?php
    $sql = mysqli_query($db, "SELECT Pertanyaan from DETAIL_SOAL where id='1'");
    $data = mysqli_query($db, "SELECT ID_DETAIL_SOAL,DESCRIPTION FROM PILIHAN_JAWABAN WHERE id_detail_soal='1'");
    $no=1;
    foreach ($sql as $row)
    {
      echo "
                 <td>".$row['Pertanyaan']."</td><br>";
        $no++;
    }
    ?>
    <tr>
    <td><input type ='Radio'  name='no1' value='A'/>a. For(i=0;i<10;i++){}</td><br>
    <td><input type ='Radio'  name='no1' value='B'/>b. For(i=1;i<9;i++){}</td><br>
    <td><input type ='Radio'  name='no1' value='C'/>c. For(i=10;i<1;i--){}</td><br>
    <td><input type ='Radio'  name='no1' value='D'/>d. For(i=1;i!=10;i++){}</td><br>
    <td><input type ='Radio'  name='no1' value='E'/>e. Do While (i < 9){i++}</td><br>
  </tr>
  <li><?php
    $sql = mysqli_query($db, "SELECT Pertanyaan from DETAIL_SOAL where id='2'");
    $data = mysqli_query($db, "SELECT ID_DETAIL_SOAL,DESCRIPTION FROM PILIHAN_JAWABAN WHERE id_detail_soal='2'");
    $no=1;
    foreach ($sql as $row)
    {
      echo "
                 <td>".$row['Pertanyaan']."</td><br>";
        $no++;
    }
    ?>
    <tr>
    <td><input type ='Radio'  name='no2' value='A'/>a. jika value false maka akan mengoutput string Hello</td><br>
    <td><input type ='Radio'  name='no2' value='B'/>b. jika value true maka akan mengoutput string Hello</td><br>
    <td><input type ='Radio'  name='no2' value='C'/>c. jika false adalah value maka mengoutput string Hello</td><br>
    <td><input type ='Radio'  name='no2' value='D'/>d. jika value false maka akan mengoutput string olleH</td><br>
    <td><input type ='Radio'  name='no2' value='E'/>e. jika value false maka akan menginput string Hello</td><br>
    </tr>
    <li><?php
      $sql = mysqli_query($db, "SELECT Pertanyaan from DETAIL_SOAL where id='3'");
      $data = mysqli_query($db, "SELECT ID_DETAIL_SOAL,DESCRIPTION FROM PILIHAN_JAWABAN WHERE id_detail_soal='3'");
      $no=1;
      foreach ($sql as $row)
      {
        echo "
                   <td>".$row['Pertanyaan']."</td><br>";
          $no++;
      }
      ?>
      <tr>
      <td><input type ='Radio'  name='no3' value='A'/>a. Do...While (value == false) </td><br>
      <td><input type ='Radio'  name='no3' value='B'/>b. Do...While (value != true)</td><br>
      <td><input type ='Radio'  name='no3' value='C'/>c. Do...While (value != false)</td><br>
      <td><input type ='Radio'  name='no3' value='D'/>d. Do...Until (value == false)</td><br>
      <td><input type ='Radio'  name='no3' value='E'/>e. Do...Until (value == true)</td><br>
      </tr>
      <li><?php
        $sql = mysqli_query($db, "SELECT Pertanyaan from DETAIL_SOAL where id='4'");
        $data = mysqli_query($db, "SELECT ID_DETAIL_SOAL,DESCRIPTION FROM PILIHAN_JAWABAN WHERE id_detail_soal='4'");
        $no=1;
        foreach ($sql as $row)
        {
          echo "
                     <td>".$row['Pertanyaan']."</td><br>";
            $no++;
        }
        ?>
        <tr>
        <td><input type ='Radio'  name='no4' value='A'/>a. array[5] = 2  </td><br>
        <td><input type ='Radio'  name='no4' value='B'/>b. array[2] = 5</td><br>
        <td><input type ='Radio'  name='no4' value='C'/>c. array[3] = 2+5</td><br>
        <td><input type ='Radio'  name='no4' value='D'/>d. for (i=2;i<5;array[i])</td><br>
        <td><input type ='Radio'  name='no4' value='E'/>e. if array[2] = 5 {array[2]}</td><br>
        </tr>
        <li><?php
          $sql = mysqli_query($db, "SELECT Pertanyaan from DETAIL_SOAL where id='5'");
          $data = mysqli_query($db, "SELECT ID_DETAIL_SOAL,DESCRIPTION FROM PILIHAN_JAWABAN WHERE id_detail_soal='4'");
          $no=1;
          foreach ($sql as $row)
          {
            echo "
                       <td>".$row['Pertanyaan']."</td><br>";
              $no++;
          }
          ?>
          <tr>
          <td><input type ='Radio'  name='no5' value='A'/>a. True</td><br>
          <td><input type ='Radio'  name='no5' value='B'/>b. False</td><br>
          <td><input type ='Radio'  name='no5' value='C'/>c. Trick Question</td><br>
          <td><input type ='Radio'  name='no5' value='D'/>d. Bisa jadi</td><br>
          <td><input type ='Radio'  name='no5' value='E'/>e. Bisa jadi tidak</td><br>
          </tr>
          <li>
            <?php
          $sql = mysqli_query($db, "SELECT Pertanyaan from DETAIL_SOAL where id='6'");
          $data = mysqli_query($db, "SELECT ID_DETAIL_SOAL,DESCRIPTION FROM PILIHAN_JAWABAN WHERE id_detail_soal='6'");
          $no=1;
          foreach ($sql as $row)
          {
            echo "
                       <td>".$row['Pertanyaan']."</td><br>";
              $no++;
          }
          ?>
          <tr>
          <td><input type ='Radio'  name='no6' value='A'/>a. strlen</td><br>
          <td><input type ='Radio'  name='no6' value='B'/>b. strrev</td><br>
          <td><input type ='Radio'  name='no6' value='C'/>c. strcpy</td><br>
          <td><input type ='Radio'  name='no6' value='D'/>d. strlwr</td><br>
          <td><input type ='Radio'  name='no6' value='E'/>e. strupper</td><br>
          </tr>

          <td><input type="submit" name="submit" value="Kumpul" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
          </ol>

                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../dist/js/timer.js"></script>

</body>

</html>
