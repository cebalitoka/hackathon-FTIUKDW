<?php

				$db_user = "gubugantik";
				$db_password = "gubugantik";
				$db_nama = "gubugantik";
				$db_host = "localhost";

				//variable untuk melakukan koneksi ke database menggunakan attribute diatas
				$koneksi = mysqli_connect($db_host,$db_user,$db_password,$db_nama);
				
					if (mysqli_connect_errno()){
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					 }

					$hasil = mysqli_query($koneksi,"SELECT * FROM member");
					$jml=mysqli_num_rows($hasil);

			if ($jml>0) {
					echo "<table width='100%' border='1' cellpadding='3' cellspacing='1'>
					<tr>
					<th>ID anggota</th>
					<th>Nama user</th>
					<th>E-mail</th>
					<th>Nama</th>
					<th>Deskripsi</th>
					<th>Tanggal bergabung</th>
					</tr>";

					while($row = mysqli_fetch_array($hasil)){
					  echo "<tr>";
					  echo "<td>" . $row['id_anggota'] . "</td>";
					  echo "<td>" . $row['user_name'] . "</td>";
					  echo "<td>" . $row['email'] . "</td>";
					  echo "<td>" . $row['nama_lengkap'] . "</td>";
					  echo "<td>" . $row['deskripsi'] . "</td>";
					  echo "<td>" . $row['tgl_gabung'] . "</td>";

					  echo "<td><a href='deleteMember.php?id=" . $row['id'] . "'>Delete</a></td>";
					  echo "<td><a href='updateMember.php?id=" . $row['id'] . "'>Edit</a></td>";
					  echo "</tr>";
					  }
					echo "</table>";
			}
			else{
				echo "Data kosong";
			}


					mysqli_close($koneksi);

?>