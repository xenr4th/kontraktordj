<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA MASTER SUPPLIER <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tsup" style="float: right;"><i class="material-icons">add_box</i><span>Supplier</span></button>
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Supplier</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">No Telepon</th>
                                <th class="text-center">Bank</th>
                                <th class="text-center">Rekening</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1;
                                $sql = $koneksi->query("SELECT * FROM supplier");
                                while($data = $sql->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_supplier']; ?></td>
                                <td><?php echo $data['alamat']; ?></td>
                                <td><?php echo $data['telpon']; ?></td>
                                <td><?php echo $data['bank']; ?></td>
                                <td><?php echo $data['rekening']; ?></td>
                                <td class="text-center">
                                    <a href="?page=supplier&aksi=ubah&id_supplier=<?php echo $data['id_supplier']; ?>" class="btn btn-success"><i class="material-icons">mode_edit</i></a>
                                    <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini..???!!!')" href="?page=supplier&aksi=hapus&id_supplier=<?php echo $data['id_supplier']; ?>" class="btn btn-danger"><i class="material-icons">delete</i></a>
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
<div class="modal fade" id="tsup" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-center" id="exampleModalScrollableTitle">Tambah Data Supplier</h2>
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
                                    <label for="">Nama Supplier</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_supplier" />
                                        </div>
                                    </div>
                                    <label for="">Alamat</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="alm" />
                                        </div>
                                    </div>
                                    <label for="">Telepon</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="tlp" />
                                        </div>
                                    </div>
                                    <label for="">Bank</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="bk" class="form-control show-tick">
                                                <option value="">-- Pilih Bank --</option>
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
                                            <input type="text" class="form-control" name="rk" />
                                        </div>
                                    </div>
                                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                </form>
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

                        $sql = $koneksi->query("INSERT INTO supplier VALUES ('','$nama_supplier','$alm','$tlp','$bk','$rk')");

                        if ($sql){
                            ?>
                                <script type="text/javascript">
                                    window.location.href="?page=supplier";
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