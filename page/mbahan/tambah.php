<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    TAMBAH DATA STOK BAHAN
                </h2>
            </div>
            <div class="body">
                <form method="POST" enctype="multipart/form-data">
                    <label for="">Kode Bahan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" style="" class="form-control" name="kode_bahan"/>
                        </div>
                    </div>

                    <label for="">Nama Bahan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama_bahan" />
                        </div>
                    </div>

                    <label for="">Kategori</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="kategori" />
                        </div>
                    </div>
                    
                    <label for="">Satuan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="satuan" />
                        </div>
                    </div>

                    <label for="">Harga Jual</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="harga_jual" />
                        </div>
                    </div>

                    <label for="">Stok</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="stok" />
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
    $kode_bahan     = $_POST['kode_bahan'];
    $nama_bahan     = $_POST['nama_bahan'];
    $kategori       = $_POST['kategori'];
    $satuan         = $_POST['satuan'];
    $harga_jual     = $_POST['harga_jual'];
    $stok           = $_POST['stok'];

    $sql = $koneksi->query("INSERT INTO stok_bahan VALUES ('$kode_bahan','$nama_bahan','$kategori','$satuan','$harga_jual','$stok')");

    if ($sql){
        ?>
            <script type="text/javascript">
                window.location.href="?page=mbahan";
            </script>
        
        <?php 

        }
    }
?>
