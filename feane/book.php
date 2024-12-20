<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="" />

  <title>Feane</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
    crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="" />
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <span> Feane </span>
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="book.php">Book Table <span class="sr-only">(current)</span>
                </a>
              </li>
            </ul>
            <div class="user_option">
              <a target="_blank" href="login.php" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a target="_blank" class="cart_link" href="cart.php">
                <svg
                  version="1.1"
                  id="Capa_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 456.029 456.029"
                  style="enable-background: new 0 0 456.029 456.029"
                  xml:space="preserve">
                  <g>
                    <g>
                      <path
                        d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path
                        d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "task272";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $persons = $_POST['persons'];
    $booking_date = $_POST['booking_date'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      exit();
    }

    $sql = "INSERT INTO bookings (name, phone, email, persons, booking_date) 
            VALUES ('$name', '$phone', '$email', '$persons', '$booking_date')";

    if ($conn->query($sql) === TRUE) {
      echo "Booking successfully recorded!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
  ?>


  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Book A Table</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="" method="POST">
              <div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your Name"
                  name="name" />
              </div>
              <div>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Phone Number"
                  name="phone" />
              </div>
              <div>
                <input
                  type="email"
                  class="form-control"
                  placeholder="Your Email"
                  name="email" />
              </div>
              <div>
                <select class="form-control nice-select wide" name="persons">
                  <option value="" disabled selected>How many persons?</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control" name="booking_date" />
              </div>
              <div class="btn_box">
                <button type="submit">Book Now</button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-6">
          <div class="map_container">
            <div>
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.3095583016384!2d35.81993857508825!3d31.97962282430968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca3f640d0be71%3A0x97e1a09530f58612!2sClever%20Mind%20POB%20ICT!5e0!3m2!1sen!2sjo!4v1732196121360!5m2!1sen!2sjo"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>Contact Us</h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> ZINC23 Building, Amman </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span> Call (079) 284-8931 </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> Clevermindpob@gmail.com </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo"> Feane </a>
            <p>
              Necessary, making this the first true generator on the Internet.
              It uses a dictionary of over 200 Latin words, combined with
            </p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "task272";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT * FROM social_media WHERE id = 1";
            $result = $conn->query($query);
            $data = $result->fetch_assoc();

            $conn->close();
            ?>

            <div class="footer_social">
              <?php if ($data): ?>
                <?php if (!empty($data['facebook'])): ?>
                  <a href="<?php echo htmlspecialchars($data['facebook']); ?>" target="_blank">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                <?php endif; ?>

                <?php if (!empty($data['twitter'])): ?>
                  <a href="<?php echo htmlspecialchars($data['twitter']); ?>" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                <?php endif; ?>

                <?php if (!empty($data['instagram'])): ?>
                  <a href="<?php echo htmlspecialchars($data['instagram']); ?>" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                <?php endif; ?>
              <?php else: ?>
                <p>No social media links available.</p>
              <?php endif; ?>
            </div>

          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>Opening Hours</h4>
          <p>Everyday</p>
          <p>10.00 Am -10.00 Pm</p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          Copyright 2021.Clever Mind POB ICT
          <!-- <a href="https://html.design/">Free Html Templates</a><br /><br />
            &copy; <span id="displayYear"></span> Distributed By
            <a href="https://themewagon.com/" target="_blank">ThemeWagon</a> -->
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->
</body>

</html>