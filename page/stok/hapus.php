<?php 

$kode_bahan1 = $_GET['kode_bahan'];

$sql = $koneksi->query("DELETE FROM stok_bahan WHERE kode_bahan='$kode_bahan1'");
if ($sql){
    ?>

        <script type="text/javascript">
            alert("Data Berhasil DiHapus");
            window.location.href="?page=stok";
        </script>
    
    <?php 

}

 ?>