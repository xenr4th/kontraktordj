<?php
$id_worker1 = $_GET['id'];
$sql = $koneksi->query("delete from worker where id_worker ='$id_worker1'");
if ($sql){
    ?>
        <script type="text/javascript">
            window.location.href="?page=mworker";
        </script>
    <?php 
}
 ?>