<?php 

$id_pekerjaan1 = $_GET['id_pekerjaan'];
$id_customer1 = $_GET['id_customer'];
$sqlc = $koneksi->query("SELECT * FROM customer WHERE id_customer='$id_customer1'");
$tampilc = $sqlc->fetch_assoc();

$sql = $koneksi->query("DELETE FROM so_pekerjaan WHERE id_pekerjaan='$id_pekerjaan1'");
if ($sql){
    ?>
    <script type="text/javascript">
    	window.location.href="?page=sales_order&id_customer=<?php echo $tampilc['id_customer']; ?>";
    </script>
    
    <?php 

}

 ?>