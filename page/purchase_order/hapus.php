<?php

	$ish = $_GET['id_supplier'];
	$qish = $koneksi->query("SELECT * FROM supplier WHERE id_supplier = '$ish'");
	$lish = $qish->fetch_assoc();

	$iph = $_GET['id_pb'];
	$qiph = $koneksi->query("SELECT * FROM po_bahan WHERE id_pb = '$iph'");
	$liph = $qiph->fetch_assoc();

	$sql = $koneksi->query("DELETE FROM po_bahan WHERE id_pb ='$iph'");

	if ($sql){
	    ?>
	        <script type="text/javascript">
	            window.location.href="?page=purchase_order&id_supplier=<?php echo $ish ?>";
	        </script>
	    <?php 
	}

?>