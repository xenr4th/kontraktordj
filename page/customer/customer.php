<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA MASTER CUSTOMER <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tcos" style="float: right;"><i class="material-icons">add_box</i><span>Customer</span></button>
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Customer</th>
                                <th>No HP</th>
                                <th>Alamat</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>  
                        <tbody>
                            <?php 
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM customer");
                                while($data = $sql->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_customer']; ?></td>
                                <td><?php echo $data['no_hp']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['kategori']; ?></td>
                                <td>
                                    <a href="?page=customer&aksi=ubah&id_customer=<?php echo $data['id_customer']; ?>" class="btn btn-success"><i class="material-icons">mode_edit</i></a>
                                    <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini..???!!!')" href="?page=customer&aksi=hapus&id_customer=<?php echo $data['id_customer']; ?>" class="btn btn-danger"><i class="material-icons">delete</i></a>
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
<div class="modal fade" id="tcos" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-center" id="exampleModalScrollableTitle">Tambah Data Customer</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <!-- Input -->
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="body">
                                <form method="POST">
                                    <label for="">Nama Customer</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_customer" required />
                                        </div>
                                    </div>
                                    <label for="">No HP</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="no_hp" required />
                                        </div>
                                    </div>
                                    <label for="">Alamat</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="alamat" required />
                                        </div>
                                    </div>
                                    <label for="">Kategori</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="kategori" required />
                                        </div>
                                    </div>
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            </form>
                        </div> 
                    </div>
                </div>

                <?php

                if (isset($_POST['simpan'])) {
                    $nama_customer = $_POST['nama_customer'];
                    $no_hp = $_POST['no_hp'];
                    $alamat = $_POST['alamat'];
                    $kategori = $_POST['kategori'];

                    $sql = $koneksi->query("INSERT INTO customer VALUES ('','$nama_customer','$no_hp','$alamat','$kategori')");

                    if ($sql){
                        ?>
                            <script type="text/javascript">
                                window.location.href="?page=customer";
                            </script>
                        <?php 

                    }
                }

                 ?>

            </div>
        </div>
    </div>
</div>


