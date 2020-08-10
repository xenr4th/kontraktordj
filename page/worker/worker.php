<?php
$id_pekerjaan1 = $_GET['id_pekerjaan'];
$qpk = $koneksi->query("SELECT * FROM so_pekerjaan WHERE id_pekerjaan = $id_pekerjaan1");
$lpk = $qpk->fetch_assoc();
?>
<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-lg-6 m-r-50">
                        <h2>DATA SALES ORDER</h2>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable">
                        <thead>
                            <tr>
                                <th>ID Sales Order</th>
                                <th>
                                    <input type="text" name="id_so" class="form-control" value="<?php echo $lpk['id_so']; ?>">
                                </th>
                                <th>Pekerjaan</th>
                                <th>
                                    <input type="text" class="form-control" value="<?php echo $lpk['pekerjaan']; ?>">
                                </th>            
                            </tr>
                            <tr> 
                                <th>Search</th>
                                <th colspan="2">
                                    <input type="text" class="form-control">
                                </th>
                                <th>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Cari</button>   
                                </th>
                                <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Tambah Worker</button></th>
                            </tr>
                            <tr>
                                <th>NO</th>
                                <th>Nama Worker</th>
                                <th>Alamat</th>
                                <th>No. HP</th>
                                <th>Kategori</th>
                                <th>Gaji</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no=1;
                                $id_pekerjaan2 = $lpk['id_pekerjaan'];
                                $sql = $koneksi->query("SELECT * FROM so_worker WHERE id_pekerjaan='$id_pekerjaan2'");
                                while ($data = $sql->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_worker']?></td>
                                <td><?php echo $data['alamat']?></td>
                                <td><?php echo $data['no_hp']?></td>
                                <td><?php echo $data['kategori']?></td>
                                <td><?php echo $data['gaji']?></td>
                                <td>
                                    <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ....??????')
                                    " href="?page=bahan&aksi=hapus&id_pekerjaan=<?php echo $lpk['id_pekerjaan'];?>&id_worker=<?php echo $data['id_worker'];?>" class="btn btn-danger" >
                                    Hapus</a>
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
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Data Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Worker</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM worker");
                                while ($data = $sql->fetch_array()) {          
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_worker']?></td>
                                <td><?php echo $data['kategori']?></td>
                                <td><a href="?page=worker&aksi=tambah&id_pekerjaan=<?php echo $lpk['id_pekerjaan']?>&id_worker=<?php echo $data['id_worker']?>" class="btn btn-primary" >Pilih</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>