<?php
				$db_user = "gubugantik";
				$db_password = "gubugantik";
				$db_nama = "gubugantik";
				$db_host = "localhost";
				$koneksi = mysqli_connect($db_host,$db_user,$db_password,$db_nama);

$id=$_POST['id'];
$user_name=$_POST['name'];
$email=$_POST['email'];
$nama_lengkap=$_POST['fullname'];
$deskripsi=$_POST['desc'];

$sql="UPDATE member SET user_name='$user_name', email='$email', nama_lengkap='$nama_lengkap', deskripsi='$deskripsi' WHERE id='$id'";
$result=mysqli_query($koneksi,$sql);


if($result){
echo "berhasil edit";
header("Location: ../admin/admin.php");
}

else {
echo "gagal edit";
}

				mysqli_close($koneksi);

?> 