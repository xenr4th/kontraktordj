<?php 

$id_so = $_GET['id_so'];

$sql = $koneksi->query("DELETE FROM so_pekerjaan WHERE id_so='$id_so'");
if ($sql){
    ?>
    <script type="text/javascript">
    	window.location.href="?page=sales_order";
    </script>
    
    <?php 

}

 ?>