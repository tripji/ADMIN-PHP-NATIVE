<?php 
  include('../config/db.php');
  $idAspirasi = $_GET['idAspirasi'];
  $query = mysqli_query($conn, "DELETE FROM aspirasi WHERE idAspirasi= '$idAspirasi' ");
  if($query){
    echo '
      <script>
      alert("Konten berhasil dihapus !");
      window.location = "../dashboard.php";
      </script>
    ';
  }

 ?>