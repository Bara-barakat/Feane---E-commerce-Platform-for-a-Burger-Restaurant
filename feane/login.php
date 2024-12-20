<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/login.css" />
  <title>Log in</title>
</head>

<body>


  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "task272";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['txt'];
    $phone_number = $_POST['email'];
    $password = $_POST['pswd'];
    $address = $_POST['address'];

    $username = $conn->real_escape_string($username);
    $phone_number = $conn->real_escape_string($phone_number);
    $password = $conn->real_escape_string($password);
    $address = $conn->real_escape_string($address);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usersdb (username, phone_number, password, address) 
            VALUES ('$username', '$phone_number', '$hashed_password', '$address')";

    if ($conn->query($sql) === TRUE) {
      echo "تم تسجيل المستخدم بنجاح!";
    } else {
      echo "خطأ: " . $sql . "<br>" . $conn->error;
    }
  }

  $conn->close();
  ?>

  <div class="container" onclick="onclick">
    <div class="top"></div>
    <div class="bottom"></div>
    <div class="center">
      <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true" />

        <div class="signup">
          <form action="login.php" method="POST">
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="text" name="txt" placeholder="User name" required="" />
            <input type="text" name="email" placeholder="phone number" required="" />
            <input type="password" name="pswd" placeholder="Password" required="" />
            <input type="text" name="address" placeholder="address" required="" />
            <button type="submit">Sign up</button>
          </form>
        </div>

        <div class="login">
          <form action="login.php" method="POST">
            <label for="chk" aria-hidden="true">Login</label>
            <input type="email" name="email" placeholder="Email" required="" />
            <input type="password" name="pswd" placeholder="Password" required="" />
            <button type="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>



</body>

</html>