<?php
        require("konfigurasi.php");
        $aksi=isset($_GET['aksi']) ? $_GET['aksi']: "";
        
        switch($aksi)
        {
            default:
                   beranda();
        }
         
        function beranda()
        {
		    $hasil['judulHalaman'] = "gubugantik.com - Pusatnya Barang Tempo Doeloe";
            require("template/beranda.php");
        }
            
?>

