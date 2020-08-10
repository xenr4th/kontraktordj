<?php

  $pkt = $_GET['id_pekerjaan'];
  $qpkt = $koneksi->query("SELECT * FROM so_pekerjaan WHERE id_pekerjaan = '$pkt'");
  $lpkt = $qpkt->fetch_assoc();

  $iwt = $_GET['id_worker'];
  $qiwt = $koneksi->query("SELECT * FROM worker WHERE id_worker = '$iwt'");
  $liwt = $qiwt->fetch_assoc();

  $id_so = $lpkt['id_so'];
  $id_pekerjaan = $lpkt['id_pekerjaan'];
  $nama_worker = $liwt['nama_worker'];
  $alamat = $liwt['alamat'];
  $no_hp = $liwt['no_hp'];
  $kategori = $liwt['kategori'];
  $gaji = $liwt['gaji'];

  $sql = $koneksi->query("INSERT INTO so_worker VALUES ('','$id_so','$id_pekerjaan','$nama_worker','$alamat','$no_hp','$kategori','$gaji')");
    if ($sql){
        ?>
        <script type="text/javascript">
            window.location.href="?page=worker&id_pekerjaan=<?php echo $lpkt['id_pekerjaan'] ?>&id_worker=<?php echo $liwt['id_worker']; ?>";
        </script>               
        <?php 
    }
?>