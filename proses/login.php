<?php 
  session_start();
  include '../config/db.php';
  
  $username  = $_POST['username'];
  $password = $_POST['password'];
  
  $query = mysqli_query($conn, " SELECT username FROM login WHERE username='$username' ");
  $count = mysqli_num_rows($query);
  if($count > 0){
    $queryId = mysqli_query($conn, "SELECT username FROM login WHERE username='$username' AND password=md5('$password') ");
    $numRow = mysqli_num_rows($queryId);
    if($numRow == 0){
      echo '
        <script>
          alert("Password Salah!!");
          window.location = "../panel-login.php"
        </script>
      ';
    } else {
      $arrayId = mysqli_fetch_array($queryId);
      $_SESSION['username'] = $arrayId['username'];
      if(isset($_SESSION['username'])){
        echo '
        <script>
          alert("Login Sukses!");
          window.location = "../dashboard.php"
        </script>
        ';
      }
    }
  } else {
    echo '
      <script>
        alert("Anda bukan admin!");
        window.location = "../index.php"
      </script>
    ';
  }
?>