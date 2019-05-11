<?php 
  include '../config/db.php'; 

      $id= $_GET['idAspirasi'];

      $query = mysqli_query($conn, "INSERT INTO aspirasipost SELECT * FROM aspirasi WHERE idAspirasi='$id' ");
 
      if($query){
      	$hapus = mysqli_query($conn, "DELETE FROM aspirasi WHERE idAspirasi= '$id' ");
      	if($hapus){
        echo ' 
            <script>
                  alert("Berhasil DiVerifikasi!");
                  window.location = "../table-Aspirasi.php"
            </script>';
       } }
       else{
            echo '<script>
                  alert("Gagal Verifikasi!");
                  window.location = "../dashboard.php"
                  </script>';
          }
        

 ?>