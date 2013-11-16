<?php
				$db_user = "gubugantik";
				$db_password = "gubugantik";
				$db_nama = "gubugantik";
				$db_host = "localhost";
				$koneksi = mysqli_connect($db_host,$db_user,$db_password,$db_nama);

				$id=$_GET['id'];

				$sql="DELETE FROM member WHERE id='$id'";
				$result=mysqli_query($koneksi,$sql);

				header("Location: ../admin/admin.php");

				mysqli_close($koneksi);

			?>				
