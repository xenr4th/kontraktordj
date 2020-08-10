<?php 

$id_supplier1 = $_GET['id_supplier'];

$sql = $koneksi->query("DELETE FROM supplier WHERE id_supplier='$id_supplier1'");
if ($sql){
    ?>

        <script type="text/javascript">
            alert("Data Berhasil DiHapus");
            window.location.href="?page=supplier";
        </script>
    
    <?php 

}

 ?>