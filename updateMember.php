<?php

				$db_user = "gubugantik";
				$db_password = "gubugantik";
				$db_nama = "gubugantik";
				$db_host = "localhost";

				//variable untuk melakukan koneksi ke database menggunakan attribute diatas
				$koneksi = mysqli_connect($db_host,$db_user,$db_password,$db_nama);
				
$id=$_GET['id'];

$result=mysqli_query($koneksi,"SELECT * FROM member WHERE id='$id'");

$rows=mysqli_fetch_array($result);
?>


<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="updateProses.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>Nama User</strong></td>
<td align="center"><strong>Nama Lengkap</strong></td>
<td align="center"><strong>Email</strong></td>
<td align="center"><strong>Deskripsi</strong></td>

</tr>
<tr>
<td>&nbsp;</td>
<td align="center">
<input name="name" type="text" id="name" value="<?php echo $rows['user_name']; ?>">
</td>
<td align="center">
<input name="fullname" type="text" id="fullname" value="<?php echo $rows['nama_lengkap']; ?>">
</td>
<td>
<input name="email" type="text" id="email" value="<?php echo $rows['email']; ?>">
</td>
<td>
<input name="desc" type="text" id="desc" value="<?php echo $rows['deskripsi']; ?>">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input name="id" type="hidden" id="id" value="<?php echo $rows['id']; ?>">
</td>
<td align="center">
<input type="submit" name="submit" value="Submit">
</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<?php
mysqli_close($koneksi);
?>