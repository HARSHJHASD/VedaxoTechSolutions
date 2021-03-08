<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Vedaxo Tech Solutions</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">
      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>Vedaxo</span></a></h1>
      </div>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
        </ul>
      </nav>
    </div>
  </header><!-- End Header -->
  <section style="padding-top:10%">


    <div style="text-align:center" class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h1>Certificate Validator</h1>
            </div>
            <div class="card-body">
              <div class="row">
                <div style="text-align:center" class="container">
                  <form class="" action="" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control" name="get_id" value="" placeholder="Enter Unique Id" required>
                    </div>
                    <button class="btn btn-secondary" type="submit" name="search_by_id">Search</button>
                  </form>
                </div>
              </div>
              <?php
              $connection = mysqli_connect('localhost','root','','vedaxointern');

              if(isset($_POST['search_by_id'])){
                $id = $_POST['get_id'];
                $query = "SELECT * FROM employee WHERE id=$id ";
                $query_run = mysqli_query($connection, $query);

?>
              <div class="table-responsive">
                <br>
                <br>
                <br>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Unique Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Profile Name</th>
                      <th scope="col">College name</th>
                      <th scope="col">Company name</th>
                      <th scope="col">Date of certification</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                    if(mysqli_num_rows($query_run) > 0){
                        while($row = mysqli_fetch_array($query_run))
                        {

                          echo '<span style="color:#83a95c;text-align:center;">Your Certificate Is Vallid.</span>';
                    ?>


                    <tr>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['Name'] ?></td>
                      <td><?php echo $row['Profile name'] ?></td>
                      <td><?php echo $row['College name'] ?></td>
                      <td><?php echo $row['Company name'] ?></td>
                      <td><?php echo $row['Date of certification'] ?></td>
                    </tr>

                    <?php
                  }}else{
                    echo '<span style="color:#ec4646;text-align:center;">Kindly Check Your Unique Id.</span>';
                    ?>
                    <tr>
                      <td colspan="6">
                        No Data Found in Our Records.
                      </td>
                    </tr>
                    <?php
                  }
                    ?>
                  </tbody>
                </table>
              </div>
<!-- yeh hai main bracket -->
              <?php
            }
              ?>

            </div>
          </div>
        </div>
      </div>




  </section>
  <footer>
    <div style="text-align:center;position: fixed;bottom: 0px;right: 0px;left: 0px;margin-bottom: 0px;" class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Vedaxo</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="www.hacodersh.com">HarshJha</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>
