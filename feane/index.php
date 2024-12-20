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

<body>
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
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="book.php">Book Table</a>
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
    <!-- slider section -->


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "task272";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    function uploadImage($file)
    {
      $targetDir = "uploads/";
      $targetFile = $targetDir . basename($file["name"]);
      move_uploaded_file($file["tmp_name"], $targetFile);
      return $targetFile;
    }

    function addOrUpdateData($conn, $title, $description, $imagePath, $formType, $id = null)
    {
      if ($id) {
        $sql = "UPDATE homeadd SET title='$title', description='$description', image_path='$imagePath', form_type='$formType' WHERE id=$id";
      } else {
        $sql = "INSERT INTO homeadd (title, description, image_path, form_type) VALUES ('$title', '$description', '$imagePath', '$formType')";
      }

      if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully!";
      } else {
        echo "Error: " . $conn->error;
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if ($_POST['action'] == "add_or_update") {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_FILES['image'];
        $formType = $_POST['form_type'];
        $id = isset($_POST['id']) ? $_POST['id'] : null;

        $imagePath = uploadImage($image);

        addOrUpdateData($conn, $title, $description, $imagePath, $formType, $id);
      }
    }

    $formData1 = [];
    $formData2 = [];
    $formData3 = [];

    $sql1 = "SELECT * FROM homeadd WHERE form_type = 1 ORDER BY created_at DESC LIMIT 1";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) {
      $formData1 = $result1->fetch_assoc();
    }

    $sql2 = "SELECT * FROM homeadd WHERE form_type = 2 ORDER BY created_at DESC LIMIT 1";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
      $formData2 = $result2->fetch_assoc();
    }

    $sql3 = "SELECT * FROM homeadd WHERE form_type = 3 ORDER BY created_at DESC LIMIT 1";
    $result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
      $formData3 = $result3->fetch_assoc();
    }
    ?>

    <section class="slider_section">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-lg-6">
                  <div class="detail-box">
                    <h1><?php echo $formData1['title']; ?></h1>
                    <p><?php echo $formData1['description']; ?></p>
                    <div class="btn-box">
                      <!-- <a href="" class="btn1">Order Now</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-lg-6">
                  <div class="detail-box">
                    <h1><?php echo $formData2['title']; ?></h1>
                    <p><?php echo $formData2['description']; ?></p>
                    <div class="btn-box">
                      <!-- <a href="" class="btn1">Order Now</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-lg-6">
                  <div class="detail-box">
                    <h1><?php echo $formData3['title']; ?></h1>
                    <p><?php echo $formData3['description']; ?></p>
                    <div class="btn-box">
                      <!-- <a href="" class="btn1">Order Now</a> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/o1.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>Tasty Thursdays</h5>
                <h6><span>20%</span> Off</h6>
                <a href="">
                  Order Now
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
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/o2.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>Pizza Days</h5>
                <h6><span>15%</span> Off</h6>
                <a href="">
                  Order Now
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Our Menu</h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter="burger">Burger</li>
        <li data-filter="pizza">Pizza</li>
        <li data-filter="pasta">Pasta</li>
        <li data-filter="fries">Fries</li>
      </ul>

      <div class="filters-content">
        <div class="row grid products"></div>
      </div>

      <div class="btn-box">
        <a href="#">View More</a>
      </div>
    </div>
  </section>





  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "task272";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $query_menucbu = "SELECT * FROM menucbu";
  $result_menucbu = mysqli_query($conn, $query_menucbu);

  $query_menucfr = "SELECT * FROM menucfr";
  $result_menucfr = mysqli_query($conn, $query_menucfr);

  $query_menucpa = "SELECT * FROM menucpa";
  $result_menucpa = mysqli_query($conn, $query_menucpa);

  $query_menucpi = "SELECT * FROM menucpi";
  $result_menucpi = mysqli_query($conn, $query_menucpi);

  $products = [];

  while ($row = mysqli_fetch_assoc($result_menucbu)) {
    $products[] = [
      'id' => 'burger_' . $row['form_id'],
      'name' => $row['title'],
      'price' => $row['price'],
      'image' => $row['image'],
      'category' => 'burger'
    ];
  }

  while ($row = mysqli_fetch_assoc($result_menucfr)) {
    $products[] = [
      'id' => 'fries_' . $row['id'],
      'name' => $row['title'],
      'price' => $row['price'],
      'image' => $row['image'],
      'category' => 'fries'
    ];
  }

  while ($row = mysqli_fetch_assoc($result_menucpa)) {
    $products[] = [
      'id' => 'pasta_' . $row['id'],
      'name' => $row['title'],
      'price' => $row['price'],
      'image' => $row['image'],
      'category' => 'pasta'
    ];
  }

  while ($row = mysqli_fetch_assoc($result_menucpi)) {
    $products[] = [
      'id' => 'pizza_' . $row['id'],
      'name' => $row['title'],
      'price' => $row['price'],
      'image' => $row['image'],
      'category' => 'pizza'
    ];
  }

  mysqli_close($conn);

  echo "<script> var products = " . json_encode($products) . "; </script>";
  ?>


  <div class="products"></div>

  <script>
    console.log("جميع البيانات الواردة من قاعدة البيانات:");
    console.log(products);

    function displayProducts(filter = "*") {
      const productContainer = document.querySelector(".products");
      productContainer.innerHTML = ""; 

      const filteredProducts = products.filter(
        (product) => filter === "*" || product.category === filter
      );

      filteredProducts.forEach((product) => {
        const productDiv = document.createElement("div");
        productDiv.classList.add("col-sm-6", "col-lg-4", "all", product.category);

        productDiv.innerHTML = `
                <div class="box">
                    <div>
                        <div class="img-box">
                            <img src="${product.image}" alt="${product.name}" />
                        </div>
                        <div class="detail-box">
                            <h5>${product.name}</h5>
                            <p>Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque</p>
                            <div class="options">
                                <h6>$${product.price}</h6>
                                <a href="#" class="add-to-cart-btn" onclick="addToCart(event, '${product.id}', '${product.name}', ${product.price}, '${product.image}')">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background: new 0 0 456.029 456.029" xml:space="preserve">
                        <g><path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"/></g>
                        <g><path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4C457.728,97.71,450.56,86.958,439.296,84.91z"/></g>
                        <g><path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"/></g>
                      </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        productContainer.appendChild(productDiv);
      });
    }

    function addToCart(event, id, name, price, image) {
      event.preventDefault();
      let cart = JSON.parse(localStorage.getItem("cart")) || [];

      const existingProductIndex = cart.findIndex((item) => item.id === id);

      if (existingProductIndex !== -1) {
        cart[existingProductIndex].quantity += 1;
      } else {
        const product = {
          id,
          name,
          price,
          image,
          quantity: 1
        };
        cart.push(product);
      }

      localStorage.setItem("cart", JSON.stringify(cart));

      document.getElementById("cartMessage").style.display = "block";
      setTimeout(function() {
        document.getElementById("cartMessage").style.display = "none";
      }, 2000);
    }

    const filterMenu = document.querySelectorAll(".filters_menu li");
    filterMenu.forEach((item) => {
      item.addEventListener("click", (e) => {
        filterMenu.forEach((menuItem) => menuItem.classList.remove("active"));
        e.target.classList.add("active");
        const filter = e.target.getAttribute("data-filter").toLowerCase();
        displayProducts(filter);
      });
    });

    displayProducts();
  </script>







  <!-- end food section -->
  <div id="cartMessage" style="width: 300px; display: none; position: fixed; top:50%; left: 38%;" class="alert alert-info mt-3">
    <h3>تم إضافة المنتج إلى السلة!</h3>
  </div>
  <!-- about section -->


  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>We Are Feane</h2>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority have suffered alteration in some form, by
              injected humour, or randomised words which don't look even
              slightly believable. If you are going to use a passage of Lorem
              Ipsum, you need to be sure there isn't anything embarrassing
              hidden in the middle of text. All
            </p>
            <a href=""> Read More </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


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

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>What Says Our Customers</h2>
      </div>
      <div class="carousel-wrap row">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam
                </p>
                <h6>Moana Michell</h6>
                <p>magna aliqua</p>
              </div>
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img" />
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna
                  aliqua. Ut enim ad minim veniam
                </p>
                <h6>Mike Hamell</h6>
                <p>magna aliqua</p>
              </div>
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

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