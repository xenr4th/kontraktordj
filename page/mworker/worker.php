<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA MASTER WORKER <button type="button" class="btn btn-success" data-toggle="modal" data-target="#twor" style="float: right;"><i class="material-icons">add_box</i><span>Worker</span>
                            </button>
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example  dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Worker</th>
                                <th>Alamat</th>
                                <th>No Hp</th>
                                <th>Kategori</th>
                                <th>Gaji/Hari</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no=1;
                                $sql = $koneksi->query("SELECT * FROM worker");
                                while ($data = $sql->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_worker'] ?></td>
                                <td><?php echo $data['alamat'] ?></td>
                                <td><?php echo $data['no_hp'] ?></td>
                                <td><?php echo $data['kategori'] ?></td>
                                <td>Rp. <?php echo number_format($data['gaji'])?></td>
                                <td>
                                <a href="?page=mworker&aksi=ubah&id=<?php echo $data['id_worker']?>" class="btn btn-success"><i class="material-icons">mode_edit</i></a>
                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini..???')"href="?page=mworker&aksi=hapus&id=<?php echo $data['id_worker'] ?>" class="btn btn-danger"><i class="material-icons">delete</i></a>
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
<div class="modal fade" id="twor" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-center" id="exampleModalScrollableTitle">Tambah Data Worker</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="body">
                                <form method="POST">
                                    <label for="">Nama Worker</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="nama" class="form-control"/>
                                        </div>
                                    </div>
                                    <label for="">Alamat</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="alamat" class="form-control"/>
                                        </div>
                                    </div>
                                    <label for="">No Hp</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="no" class="form-control"/>
                                        </div>
                                    </div>
                                    <label for="">Kategori</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="kategori" class="form-control show-tick">
                                                <option value="">- Pilih -</option>
                                                <option value="Mandor">Mandor</option>
                                                <option value="Kuli">Kuli</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label for="">Gaji</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="gaji" class="form-control"/>
                                            </div>
                                        </div>
                                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    if (isset($_POST['simpan'])){
                        $nama_worker = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $no = $_POST['no'];
                        $kategori = $_POST['kategori'];
                        $gaji = $_POST['gaji'];
                        $sql = $koneksi->query("INSERT INTO worker VALUES('', '$nama_worker', '$alamat', '$no', '$kategori', '$gaji')");
                        if($sql){
                            ?>
                            <script type="text/javascript">
                                window.location.href="?page=mworker";
                            </script>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>