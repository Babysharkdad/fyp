<!DOCTYPE html>

<?php
  include('conn.php');
  $studentId=$_GET['updateStudent'];
  $sql="Select * from `student` where studentId='$studentId'";
  $result=mysqli_query($conn,$sql); 
  $row=mysqli_fetch_assoc($result);
  $studentName=$row['studentName'];
  $studentUsername=$row['studentUsername'];
  $studentEmail=$row['studentEmail'];
  $studentPhoneNo=$row['studentPhoneNo'];
  $studentPass=$row['studentPass'];
  $studentCourse=$row['studentCourse'];




    if(isset($_POST['submit']))
    {
       $studentName=$_POST['studentName'];
       $studentUsername=$_POST['studentUsername'];
       $studentEmail=$_POST['studentEmail'];
       $studentPhoneNo=$_POST['studentPhoneNo'];
       $studentPass=$_POST['studentPass'];
       $studentCourse=$_POST['studentCourse'];


       $sql="update student set studentName='$studentName',studentUsername='$studentUsername',studentEmail='$studentEmail',
       studentPhoneNo='$studentPhoneNo', studentPass='$studentPass', studentCourse='$studentCourse'
       where studentId='$studentId'";
        $result=mysqli_query($conn,$sql);
         if($result)
          {
            echo "<script> alert('Data updated successfully') </script>";
            echo "<script> window.location='studentlist.php'; </script>";
        }else{
          die(mysqli_error($conn));
        }

      }

?>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="homecoun.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">DASS Expert</span>
                </a>
              </div><!-- End Logo -->
    
              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Update an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>


                  <!-- register fform-->


                  <form class="row g-3 needs-validation" novalidate method="post">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="studentName" class="form-control" id="yourName" 
                      value="<?php echo $studentName ?>" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="studentEmail" class="form-control" id="yourEmail" 
                      value="<?php echo $studentEmail ?>" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPhoneNo" class="form-label">Your Phone Number</label>
                      <input type="tell" name="studentPhoneNo" class="form-control" id="yourPhoneNo" 
                      value="<?php echo $studentPhoneNo ?>" required>
                      <div class="invalid-feedback">Please enter a valid phone Number!</div>
                    </div>

                    <form class="row g-3 needs-validation" novalidate method="post">
                    <div class="col-12">
                      <label for="yourCourse" class="form-label">Your Course</label>
                      <input type="text" name="studentCourse" class="form-control" id="yourCourse"  
                      value="<?php echo $studentCourse ?>" required>
                      <div class="invalid-feedback">Please, enter your course!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="studentUsername" class="form-control" id="yourUsername" 
                        value="<?php echo $studentUsername ?>" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="text" name="studentPass" class="form-control" id="yourPassword" 
                      value="<?php echo $studentPass ?>" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit">Update Account</button>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

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
