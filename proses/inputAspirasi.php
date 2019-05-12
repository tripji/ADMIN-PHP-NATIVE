<?php 
		include '../config/db.php';

		if(isset($_POST['submit'])){
			$status = 0;
			$namaLengkap = $_POST['namaLengkap'];
			$textAspirasi = $_POST['textAspirasi'];
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'images/'.$nama);
					$query = mysqli_query($conn, "INSERT INTO aspirasi(namaLengkap, textAspirasi, foto, status) VALUES('$namaLengkap', '$textAspirasi', '$nama', '$status')");
					if($query){
						echo ' 
						 <script>
        					alert("Berhasil Ditambahkan!");
        					window.location = "../dashboard.php"
      					 </script>';
					}else{
						echo '<script>
        					alert("Gagal Ditambahkan!");
        					window.location = "../formInput-Aspirasi.php"
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
		}
		?>