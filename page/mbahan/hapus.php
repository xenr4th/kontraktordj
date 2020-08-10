<?php 

$kode_bahan1 = $_GET['kode_bahan'];

$sql = $koneksi->query("DELETE FROM stok_bahan WHERE kode_bahan='$kode_bahan1'");
if ($sql){
    ?>

        <script type="text/javascript">
            window.location.href="?page=mbahan";
        </script>
    
    <?php 

}

 ?>