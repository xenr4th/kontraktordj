<?php 

$kode_bahan1 = $_GET['kode_bahan'];

$sql = $koneksi->query("SELECT * FROM stok_bahan WHERE kode_bahan='$kode_bahan1'");
$tampil = $sql->fetch_assoc();

 ?>

<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    UBAH DATA STOK BAHAN
                </h2>
            </div>
            <div class="body">
                <form method="POST" enctype="multipart/form-data">
                    <label for="">Kode Bahan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="kode_bahan" value="<?php echo $tampil['kode_bahan']; ?>" disabled />
                        </div>
                    </div>
                    <label for="">Nama Bahan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama_bahan"  value="<?php echo $tampil['nama_bahan']; ?>" />
                        </div>
                    </div>
                    <label for="">Kategori</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="kategori"  value="<?php echo $tampil['kategori']; ?>" />
                        </div>
                    </div>
                    <label for="">Satuan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="satuan"  value="<?php echo $tampil['satuan']; ?>" />
                        </div>
                    </div>
                    <label for="">Harga jual</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="harga_jual"  value="<?php echo $tampil['harga_jual']; ?>" />
                        </div>
                    </div>
                    <label for="">Stok</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="stok"  value="<?php echo $tampil['stok']; ?>" />
                        </div>
                    </div>
                    
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
<?php
if (isset($_POST['simpan'])) {
    // $kode_bahan = $_POST['kode_bahan'];
    $nama_bahan = $_POST['nama_bahan'];
    $kategori     = $_POST['kategori'];
    $satuan     = $_POST['satuan'];
    $harga_jual = $_POST['harga_jual']; 
    $stok       = $_POST['stok'];


        $sql1 = $koneksi->query("UPDATE stok_bahan SET nama_bahan='$nama_bahan', kategori='$kategori', satuan='$satuan', harga_jual='$harga_jual', stok='$stok' WHERE kode_bahan='$kode_bahan1'");

        if ($sql1){
            ?>

            <script type="text/javascript">
                window.location.href="?page=mbahan";
            </script>
        
        <?php 
    
        }

    }

 ?>