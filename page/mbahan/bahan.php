<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA MASTER BAHAN <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tbah" style="float: right;"><i class="material-icons">add_box</i><span>Bahan</span>
                            </button>
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Bahan</th>
                                <th>Kategori</th>
                                <th>Satuan</th>
                                <th>Harga Jual</th>
                                <th>Stok</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1;
                                $sql = $koneksi->query("SELECT * FROM stok_bahan");
                                while($data = $sql->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_bahan']; ?></td>
                                <td><?php echo $data['kategori']; ?></td>
                                <td><?php echo $data['satuan']; ?></td>
                                <td>Rp. <?php echo number_format($data['harga_jual']) ?></td>
                                <td><?php echo $data['stok']; ?></td>
                                <td>
                                    <a href="?page=mbahan&aksi=ubah&kode_bahan=<?php echo $data['kode_bahan']; ?>" class="btn btn-success"><i class="material-icons">mode_edit</i></a>
                                    <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini..???!!!')" href="?page=mbahan&aksi=hapus&kode_bahan=<?php echo $data['kode_bahan']; ?>" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="tbah" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-center" id="exampleModalScrollableTitle">Tambah Data Stok Bahan</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="body">
                                <form method="POST" enctype="multipart/form-data">
                                    <label for="">Nama Bahan</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_bahan" required />
                                        </div>
                                    </div>
                                    <label for="">Kategori</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="kategori" required />
                                        </div>
                                    </div>
                                    <label for="">Satuan</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="satuan" required />
                                        </div>
                                    </div>
                                    <label for="">Harga Jual</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="harga_jual" required />
                                        </div>
                                    </div>
                                    <label for="">Stok</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="stok" required />
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

                    $sql = $koneksi->query("INSERT INTO stok_bahan VALUES ('','$nama_bahan','$kategori','$satuan','$harga_jual','$stok')");

                    if ($sql){
                        ?>
                            <script type="text/javascript">
                                window.location.href="?page=mbahan";
                            </script>
                        
                        <?php 

                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
