<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Police Report and Crime Report Management System</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">

  <!-- Custom CSS -->
  <link href="assets/css/simple-sidebar.css" rel="stylesheet">
  <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

  <style>
    .navbar-custom {
      background-color: #4E55E6;
      height: 70px;

    }


    .navbar-nav {
      position: absolute;
      left: 250px;
      top: -20px;
      margin: 16px;
      padding: 1%;


    }

    .nav-item .nav-link {
      line-height: 10px;
      margin-right: 6px;
      /* color: yellow; */
      color: black;
      border-radius: 10px;
      font-weight: bold;
      font-size: 19px;

    }

    .nav-item .nav-link:hover {
      /* background-color: black; */
      /* border-radius: 10px; */
    }

    .dropdown-menu .dropdown-item {

      font-weight: bold;
      font-size: 18px;

    }



    .carousel-caption {
      position: absolute;
      top: 50px;
      font-weight: bolder;

    }

    .carousel-caption .text-heading {

      font-weight: bold;
      font-size: 32px;
      padding-bottom: 40px;
      color: yellow;
    }

    .cr {
      top: -22px;

    }

    .cards {

      margin-top: 50px;

    }

    .heading {
      font-weight: bolder;
      color: navy;

    }

    .about {
      margin-top: 50px;
    }

    .ab-heading {
      font-weight: bolder;
      color: navy;

    }

    .lead {
      text-align: justify;
    }

    .footer {
      background-color: #4E55E6;
      margin-top: 20px;
      width: 100%;
      height: 200px;
    }

    .contact {
      font-weight: bolder;
      color: white;
      padding: 15px;

    }

    .footer ul {
      list-style-type: none;
    }

    .footer ul li {
      display: inline;
      padding: 1%;
    }

    .footer p,
    a {
      margin: 7px;
      padding: 3px;
      font-size: 17px;
      line-height: 20px;

      color: azure;
    }

    .footer a:hover {

      color: yellow;
    }
  </style>
</head>

<body>

  <!-- navbar  -->

  <nav class="navbar navbar-custom">
    <div class="container-fluid">

      <a href="index.php" class="navbar-brand"><img src="images/logo 1.png" style="width:60px; height:auto; position:absolute; top:2px; left:180px" alt=""></a>
      <div class="navbar-header">


        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>


      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Service</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="https://www.google.com/search?q=police&rlz=1C1VDKB_enBD977BD977&tbm=lcl&sxsrf=ALiCzsaJ1qGEBN2101Ku53aQjldS1xI6dg%3A1671675820216&ei=rL-jY4_wDIa5seMP_vqWIA&ved=0ahUKEwiP9sXblYz8AhWGXGwGHX69BQQQ4dUDCAk&uact=5&oq=police&gs_lcp=Cg1nd3Mtd2l6LWxvY2FsEAMyBAgjECcyBwgAELEDEEMyBwgAEMkDEEMyBQgAEJIDMgoIABCxAxCDARBDMhAIABCABBCHAhCxAxCDARAUMgQIABBDMgQIABBDMgQIABBDMgsIABCABBCxAxCDAToICAAQsQMQgwFQAFi3BmCYDmgAcAB4AYAB5AGIAYsIkgEFMC41LjGYAQCgAQHAAQE&sclient=gws-wiz-local#rlfi=hd:;si:;mv:[[22.293278647172393,91.78924775764685],[22.28861292586838,91.7790982787345],null,[22.290945805989704,91.78417301819067],17]">Nearby Police Station</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#footer-section">Contact</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="user_cmpl.php">New Case</a>
          </li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="login.php">Login</a></li>
              <li><a class="dropdown-item" href="registration.php">Register</a></li>
              <li role="separator" class="divider"></li>
              <li><a class="dropdown-item" href="#">link</a></li>
            </ul>
          </li>
        </ul>



      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>



  <!-- slider  -->


  <div class="carousel cr">
    <div>

      <img src="images/cimg2.jpg" width="100%" height="500px" alt="slider image">


    </div>

    <div class="carousel-caption">
      <h2 class="mb-4 text-heading">Police Report and Crime Report Management System</h2>


      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <form class="navbar-form mb-5 p-3" role="search" method="get" action="hearing_case_details.php">
              <input class="form-control m-2" type="search" style="width:620px; height:47px; border-radius:10px;" placeholder="Search for Services" aria-label="Search" placeholder="Enter Case ID for Case Progress" name="case_id">

              <button type="submit" name="search" class="btn btn-warning form-control" style="width:80px; height:42px; border-radius:10px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Search</button>
            </form>

          </div>
        </div>
      </div>

      <!-- <button class="btn btn-warning btn-lg">Service</button> -->
    </div>
  </div>


  <!-- card  -->
  <div class="container">

    <h3 class="text-center heading">Welcome to the Police and Crime Report Management System</h3>


    <div class="row cards">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/th1.jpg" style="width:380px; height:260px;" alt="Thumbnail">
          <div class="caption">
            <h4>Police Report Management System</h4>
            <p>Crime reports should not glorify the activities of criminals. The crime reporter should follow standards of decency and good taste. People sometime criticize crime reporting by the press. Some reporters have also been found following unethical standards, thus causing much pain and sorrow to the victims or their families and friends.</p>
            <p><a href="#" class="btn btn-warning" role="button">View </a></p>

          </div>
        </div>
      </div>


      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/th2.jpg" style="width:380px; height:260px;" alt="Thumbnail">
          <div class="caption">
            <h4>Case Management System</h4>
            <p>Crime reports should not glorify the activities of criminals. The crime reporter should follow standards of decency and good taste. People sometime criticize crime reporting by the press. Some reporters have also been found following unethical standards, thus causing much pain and sorrow to the victims or their families and friends.</p>
            <p><a href="#" class="btn btn-warning" role="button">View </a></p>
          </div>
        </div>
      </div>


      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="images/th1.jpg" style="width:380px; height:260px;" alt="Thumbnail">
          <div class="caption">
            <h4>Crime Report Management System</h4>
            <p>Crime reports should not glorify the activities of criminals. The crime reporter should follow standards of decency and good taste. People sometime criticize crime reporting by the press. Some reporters have also been found following unethical standards, thus causing much pain and sorrow to the victims or their families and friends.</p>

            <p><a href="#" class="btn btn-warning" role="button">View </a></p>
          </div>
        </div>
      </div>

    </div>

  </div>


  <!-- about  -->

  <h2 class="text-center ab-heading">About Us</h2>
  <div class="container my-4 about">
    <div class="row featurette d-flex justify-content-center align-items-center">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">
          It's Police Report and Crime Report Management System.

        </h2>
        <p class="lead">
          The police are a constituted body of persons empowered by a state, with the aim to enforce the law, to ensure the safety, health and possessions of citizens, and to prevent crime and civil disorder.Their lawful powers include arrest and the use of force legitimized by the state via the monopoly on violence. The term is most commonly associated with the police forces of a sovereign state that are authorized to exercise the police power of that state within a defined legal or territorial area of responsibility.
        </p>
        <p><a href="about.php" class="btn btn-info" role="button">Details</a> </p>
        <a href="about.php"></a>
      </div>
      <div class="col-md-5">
        <img src="images/th1.jpg" class="img-fluid mx-auto" style="width:500px;height:400px;" alt="About image">
      </div>
    </div>




  </div>
  </div>



  <section id="footer-section">
    <div class="container text-center footer">
      <h3 class="text-center contact">Send A Message</h3>
      <ul class="mb-5">
        <li>
          <a href="user_support.php"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" /></a>
        </li>
      </ul>

      <p>All rights reserved. Designed By <a href="index.php"> Police Report and Crime Report Management System.</a></p>
    </div>
  </section>


  <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


</body>

</html>