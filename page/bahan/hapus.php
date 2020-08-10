<?php

	$pkh = $_GET['id_pekerjaan'];
	$qpkh = $koneksi->query("SELECT * FROM so_pekerjaan WHERE id_pekerjaan = '$pkh'");
	$lpkh = $qpkh->fetch_assoc();

	$ibh = $_GET['id_bahan'];
	$qibh = $koneksi->query("SELECT * FROM stok_bahan WHERE kode_bahan = '$ibh'");
	$libh = $qibh->fetch_assoc();

	$sql = $koneksi->query("DELETE FROM so_bahan WHERE id_bahan ='$ibh'");
	if ($sql){
	    ?>
	        <script type="text/javascript">
	            window.location.href="?page=bahan&id_pekerjaan=<?php echo $pkh ?>";
	        </script>
	    <?php 
	}

?>