<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-center" id="exampleModalScrollableTitle">Tambah Data Pekerjaan</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                    $ai = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'kontraktordj' AND TABLE_NAME = 'sales_order'";
                    $sqlai = $koneksi->query("SHOW TABLE STATUS LIKE 'sales_order'");
                    $row = $sqlai->fetch_assoc();
                    $id_customer1 = $_GET['id_customer'];
                    $sqlc = $koneksi->query("SELECT * FROM customer WHERE id_customer='$id_customer1'");
                    $tampilc = $sqlc->fetch_assoc();
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <!-- <label for="">ID SO</label> -->
                    <input type="hidden" name="id_so" value="<?php echo $row['Auto_increment']; ?>" />
                    <label for="">Pekerjaan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="pekerjaan" required />
                        </div>
                    </div>
                    <label for="">Jumlah</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="jumlah" required />
                        </div>
                    </div>                  
                    <label for="">Satuan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="satuan" value="m2" readonly />
                        </div>
                    </div>
                    <label for="">Harga</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="harga" required/>
                        </div>
                    </div>
                    <label for="">Foto</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="file" class="form-control" name="foto" required/>
                        </div>
                    </div>
                    <label for="">Keterangan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="keterangan"/>
                        </div>
                    </div>
                    <input type="submit" name="simpan" value="Tambah" class="btn btn-primary  waves-effect">
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
<!-- Input -->
<div class="row clearfix">
    <?php
        if (isset($_POST['simpan'])) {
            $id_so = $_POST['id_so'];
            $pekerjaan = $_POST['pekerjaan'];
            $jumlah = $_POST['jumlah'];
            $satuan = $_POST['satuan'];
            $harga = $_POST['harga'];
            $keterangan = $_POST['keterangan'];
            $foto = $_FILES['foto']['name'];
            $lokasi = $_FILES['foto']['tmp_name'];
            $upload = move_uploaded_file($lokasi, "images/".$foto);

            if ($upload) {
            
            $sql = $koneksi->query("INSERT INTO so_pekerjaan VALUES ('','$id_so','$pekerjaan','$jumlah','$satuan','$foto','$harga','$keterangan')");

            if ($sql){
                ?>
                <script type="text/javascript">
                    window.location.href="?page=sales_order&id_customer=<?php echo $tampilc['id_customer']; ?>";
                </script>               
                <?php 
                }
            }
        }
    ?>
    <?php 
        $id_customer1 = $_GET['id_customer'];
        $sqlc = $koneksi->query("SELECT * FROM customer WHERE id_customer='$id_customer1'");
        $tampilc = $sqlc->fetch_assoc();
        $ai = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'wp' AND TABLE_NAME = 'sales_order'";
        $tgl=date('d-m-Y');
        $sqlai = $koneksi->query("SHOW TABLE STATUS LIKE 'sales_order'");
        $row = $sqlai->fetch_assoc();
    ?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2>DATA SALES ORDER</h2>
                            <!-- Button trigger modal -->
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"><i class="material-icons">add_box</i><span>Pekerjaan</span>
                            </button>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                	<tr>
                                		<th colspan="2" >ID Sales Order</th>
                                        <th colspan="2">
                                            <input type="text" name="id_so2" class="form-control" value="<?php echo $row['Auto_increment']; ?>" readonly>
                                        </th>
                                        <th colspan="2">Nama Customer</th>
                                        <th>
                                            <input type="text" name="nama" class="form-control" value="<?php echo $tampilc['nama_customer']; ?>" required>
                                        </th>
                                        <th>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"><i class="material-icons">add_circle_outline</i></button>   
                                        </th>
                                        <th colspan="2">
                                            <a href="?page=customer" class="btn btn-primary"><i class="material-icons">add_box</i><span>Customer Baru</span></a>
                                        </th>
                                    </tr>
                                	<!-- <tr>
                                        <th>Search</th>
                                        <th colspan="2">
                                            <input name="cari" class="form-control" type="search" aria-label="Search">        
                                        </th>
                                        <th>
                                            <button class="btn btn-success" type="submit">Search</button>
                                        </th>
                                        <th></th>
                                	</tr> -->
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Pekerjaan</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-center">Satuan</th>
                                        <th class="text-center">Foto</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Keterangan</th>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">Bahan</th>
                                        <th class="text-center">Worker</th>
                                    </tr>
                                </thead>
                                <?php 
                                    $no=1;
                                    $ai = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'wp' AND TABLE_NAME = 'sales_order'";
                                    $sqlai = $koneksi->query("SHOW TABLE STATUS LIKE 'sales_order'");
                                    $row = $sqlai->fetch_assoc();
                                    $idai = $row['Auto_increment'];
                                    $sql = $koneksi->query("SELECT * FROM so_pekerjaan WHERE id_so='$idai'");
                                    while($data = $sql->fetch_assoc()){
                                ?>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $data['pekerjaan']; ?></td>
                                        <td><?php echo $data['jumlah']; ?></td>
                                        <td><?php echo $data['satuan']; ?></td>
                                        <td><img src="images/<?php echo $data['foto']; ?>" width="50" height="50" alt=""></td>
                                        <td>Rp. <?php echo number_format($data['harga']) ?></td>
                                        <td><?php echo $data['keterangan']; ?></td>
                                        <td class="text-center">
                                            <a href="?page=sales_order&aksi=ubah&id_pekerjaan=<?php echo $data['id_pekerjaan']; ?>" class="btn btn-success"><i class="material-icons">mode_edit</i></a>
                                            <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini..???!!!')" href="?page=sales_order&aksi=hapus&id_pekerjaan=<?php echo $data['id_pekerjaan']; ?>" class="btn btn-danger"><i class="material-icons">delete</i></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="?page=bahan&id_pekerjaan=<?php echo $data['id_pekerjaan']; ?>" class="btn btn-primary"><i class="material-icons">check</i></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="?page=worker&id_pekerjaan=<?php echo $data['id_pekerjaan']; ?>" class="btn btn-primary" ><i class="material-icons">check</i></a>
                                        </td>
                                    </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                        <br>
                        <button type="submit" name="sall" class="btn btn-primary"><i class="material-icons">save</i><span>SAVE</span></button>
                        <a class="btn btn-primary" href="?page=sales_order&aksi=hapall&id_so=<?php echo $row['Auto_increment']; ?>"><i class="material-icons">replay</i><span>RESET</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php
    if(isset($_POST['sall'])){
        $id_so2 = $_POST['id_so2'];
        $nama = $_POST['nama'];
        $tgl=date('Y-m-d');
        $koneksi->query("INSERT INTO sales_order VALUES('','$nama','$tgl')");
        echo
            "<script type=\"text/javascript\">
                swal({title: \"Success\", text: \"Sales Order Saved\", type: 
\"success\"}).then(function(){
                    window.location.assign(\"?page=sales_order\");
                    });
            </script>";
        
    }
?>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalScrollableTitle">Data Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable" style="overflow: scroll;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Customer</th>
                                <th>Nama Customer</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <?php 
                            $no=1;
                            $sql = $koneksi->query("SELECT * FROM customer");
                            while($data = $sql->fetch_assoc()){
                        ?>
                        
                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['id_customer']; ?></td>
                                <td><?php echo $data['nama_customer']; ?></td>
                                <td>
                                    <a href="?page=sales_order&id_customer=<?php echo $data['id_customer']; ?>" class="btn btn-primary" >Pilih</a>
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
