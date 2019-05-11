<?php 
  include '../config/db.php'; 

      $id= $_POST['idAspirasi'];

      $namaLengkap = $_POST['namaLengkap'];
      $textAspirasi = $_POST['textAspirasi'];
      $ekstensi_diperbolehkan = array('png','jpg');
      $nama = $_FILES['file']['name'];
      $x = explode('.', $nama);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];  
 
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){      
          move_uploaded_file($file_tmp, 'images/'.$nama);
          $query = mysqli_query($conn, "UPDATE aspirasi SET namaLengkap='$namaLengkap', textAspirasi='$textAspirasi', foto='$nama' WHERE idAspirasi='$id' ");
          if($query){
            echo ' 
             <script>
                  alert("Berhasil Diedit!");
                  window.location = "../dashboard.php"
                 </script>';
          }else{
            echo '<script>
                  alert("Gagal Diedit!");
                  window.location = "../formEdit-Aspirasi.php"
                  </script>';
          }
        }else{
          echo '<script>
                  alert("File Terlalu Besar!!!");
                 </script>';
        }
      }
      else{
        echo '<script>
                  alert(Ekstensi File Tidak Diperbolehkan!!);
                </script>';
      }
    

 ?>