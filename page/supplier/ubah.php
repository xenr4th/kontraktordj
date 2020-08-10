<?php 
$id_supplier1 = $_GET['id_supplier'];
$sql = $koneksi->query("SELECT * FROM supplier WHERE id_supplier='$id_supplier1'");
$tampil = $sql->fetch_assoc();
 ?>
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    UBAH DATA SUPPLIER
                </h2>
            </div>
            <div class="body">
                <form method="POST">
                    <label for="">Nama Supplier</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama_supplier"  value="<?php echo $tampil['nama_supplier']; ?>" />
                        </div>
                    </div>
                    <label for="">Alamat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="alm"  value="<?php echo $tampil['alamat']; ?>" />
                        </div>
                    </div>
                    <label for="">Telepon</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="tlp"  value="<?php echo $tampil['telpon']; ?>" />
                        </div>
                    </div>
                    <label for="">Bank</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select name="bk" class="form-control show-tick">
                                <option value="">- Pilih Bank -</option>
                                <option value="BNI">BNI</option>
                                <option value="BRI">BRI</option>
                                <option value="BCA">BCA</option>
                                <option value="MANDIRI">MANDIRI</option>
                                <option value="DANAMON">DANAMON</option>
                            </select>
                        </div>
                    </div>
                    <label for="">Rekening</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="rk"  value="<?php echo $tampil['rekening']; ?>" />
                        </div>
                    </div>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
        
<?php

if (isset($_POST['simpan'])) {
    $nama_supplier = $_POST['nama_supplier'];
    $alm = $_POST['alm'];
    $tlp = $_POST['tlp'];
    $bk = $_POST['bk'];
    $rk = $_POST['rk'];

    $sql1 = $koneksi->query("UPDATE supplier SET nama_supplier='$nama_supplier', alamat='$alm', telpon='$tlp', bank='$bk', rekening='$rk' WHERE id_supplier='$id_supplier1'");
    if ($sql1){
        ?>
            <script type="text/javascript">
                window.location.href="?page=supplier";
            </script>        
        <?php 
    }
}
?>