<?php
$kode1 = $_GET['id_bahan'];

	$sql = $koneksi->query("delete from bahan where id_bahan ='$kode1'");
if ($sql) {
?>
<script type="text/javascript">
                alert("Data berhasil Dihapus");
                window.location.href ="?page=barang";
            </script>

    <?php
}

?>

