<?php 
  include '../config/db.php'; 

      $id= $_GET['idAspirasi'];

      $query = mysqli_query($conn, "UPDATE aspirasi SET status='1' WHERE idAspirasi='$id' ");
 
      if($query){
        echo ' 
            <script>
                  alert("Berhasil DiVerifikasi!");
                  window.location = "../table-Aspirasi.php"
            </script>';
       } 
       else{
            echo '<script>
                  alert("Gagal Verifikasi!");
                  window.location = "../dashboard.php"
                  </script>';
          }
        

 ?>