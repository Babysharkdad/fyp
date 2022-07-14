<?php 
	include ('conn.php');
	session_start(); 
	//Set Question Number
	$number = $_GET['n'];

	//Query for the Question
	$query = "SELECT * FROM question WHERE questionNumber = $number";

	// Get the question
	$result = mysqli_query($conn,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM choices WHERE questionNumber = $number";
	$choices = mysqli_query($conn,$query);
	// Get Total questions
	$query = "SELECT * FROM question";
	$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
 	
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DASS Test - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="homestud.php" class="logo d-flex align-items-center">
      <span class="d-none d-lg-block">Hi <?php echo $_SESSION["studentUsername"]; ?></span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
     
    <div class="d-flex align-items-right justify-content-between">
      <a href="logoutstudent.php" class="logo d-flex align-items-center">
      <span STYLE="font-size:15.0pt" class="d-none d-lg-block">Sign Out</span>
      </a>
    </div><!-- End sign out -->

      </ul>
      
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="homestud.php">
          <i class="bi bi-grid"></i>
          <span>Dashbord</span>
        </a>
      </li><!-- End Dashboard Nav -->
      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Depression Anxiety Stress Scale (DASS)</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="testlist.php">
              <i class="bi bi-circle"></i><span>Take Test</span>
            </a>
          </li>
          <li>
            <a href="testhistory.php">
              <i class="bi bi-circle"></i><span>Test History</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>DASS Test</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="homestud.php">Home</a></li>
          <li class="breadcrumb-item active">Dass Test</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

      </div>
    </section>


    <div class="card">
    <div class="container">
      <div class="current">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
      <p class="question"><?php echo $question['questionText']; ?> </p>
      <form method="POST" action="testprocess.php">
        <ul class="choicess" list-style= "none" >
          <?php while($row=mysqli_fetch_assoc($choices)){ ?>
          <li><input type="radio" name="choice" value="<?php echo $row['choicesId']; ?>"><?php echo $row['choicesText']; ?></li>
          <?php } ?>


        </ul>
        <input type="hidden" name="number" value="<?php echo $number; ?>">
        <input type="submit" name="submit" value="Next">


        </form>
      </div>
      </div>
      </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  </body></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>CounselorUTMJasin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">AminNawawi</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>