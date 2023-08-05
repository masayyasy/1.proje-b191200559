<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
  header("location: bismillah.php");
}

if (isset($_POST['submit'])) {
    $eposta = $_POST['eposta'];
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM users WHERE eposta= '$eposta' AND password='$password'";
    $result=mysqli_query($conn, $sql); 
    if($result->num_rows>0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("location: bismillah.php");
    } else {
        echo"<script> alert('woops! Epostanız yada Passwordız yanlış giriniz')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="phpstyle.css"/>
</head>
<body>

    <div class="container">
      <form action="" method="POST" class="login-email">
        <section class="jumbotron text-center">
          <img src="resim/salman.jpg" alt="salman photo" width="75" class="rounded-circle img-thumbnail"/>
          <br><br>
          <h1 style="font-size: 2.3rem; font-weight: bold; color: #fff;">HOŞGELDİN</h1>
        </section>
        <p style="font-size: 1.5rem; font-weight: 500; color: #fff; margin-bottom: 0.5rem;">Log In</p>
        <div class="input-grup">
          <input type="eposta" placeholder="E-posta" name="eposta" value="<?php echo $eposta; ?>" required>
        </div>
        <div class="input-grup">
          <input type="password" placeholder="Şifre" name="password" value="<?php echo $_POST['password']; ?>" required>
        </div>
        <div class="input-button">
          <button name="submit" class="btn">Giriş Yap</button>
        </div>
        <br>
        <p class="login-register-text" style="color: #fff">Hesabın yok mu?
          <a href="register.php">Kaydol</a>
        </p>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>