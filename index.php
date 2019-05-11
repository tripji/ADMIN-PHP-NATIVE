<?php 
  session_start();
  if(isset($_SESSION['username'])){
    echo '
      <script>
        window.location="dashboard.php"
      </script>
    ';
  } else {
    echo '
      <script>
        window.location="panel-login.php"
      </script>
    ';
  }
?>