<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
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
    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA STOK BAHAN
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Bahan</th>
                                <th>Nama Bahan</th>
                                <th>Kategori</th>
                                <th>Satuan</th>
                                <th>Harga Jual</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php 
                            $no=1;
                            $sql = $koneksi->query("SELECT * FROM stok_bahan");
                            while($data = $sql->fetch_assoc()){
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['kode_bahan']; ?></td>
                                <td><?php echo $data['nama_bahan']; ?></td>
                                <td><?php echo $data['kategori']; ?></td>
                                <td><?php echo $data['satuan']; ?></td>
                                <td>Rp. <?php echo $data['harga_jual']; ?></td>
                                <td><?php echo $data['stok']; ?></td>

                                <td>
                                    <a href="?page=stok&aksi=ubah&kode_bahan=<?php echo $data['kode_bahan']; ?>" class="btn btn-success" >Ubah</a>
                                    <br>
                                    <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini..???!!!')" href="?page=stok&aksi=hapus&kode_bahan=<?php echo $data['kode_bahan']; ?>" class="btn btn-danger" >Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
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
                alert("Data Berhasil Ditambahkan");
                window.location.href="?page=stok";
            </script>
        
        <?php 

        }
    }
?>
