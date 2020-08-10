<?php 
$id_customer1 = $_GET['id_customer'];
$sql = $koneksi->query("DELETE FROM customer WHERE id_customer='$id_customer1'");
if ($sql){
    ?>
        <script type="text/javascript">
            window.location.href="?page=customer";
        </script>
    <?php 
}
 ?>