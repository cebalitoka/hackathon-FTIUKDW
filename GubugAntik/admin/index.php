<?php
        require("../konfigurasi.php");
        $aksi=isset($_GET['aksi']) ? $_GET['aksi']: "";
        
        switch($aksi)
        {
            default:
                   panelUtama();
        }
         
        function panelUtama()
        {
		    $hasil['judulHalaman'] = "gubugantik.com - Panel Utama Admin";
            require("../template/admin/admin.php");
        }
            
?>