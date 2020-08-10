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
                    <div class="col-lg-1">
                        <button onclick="window.history.go(-1);" class="btn btn-primary">Back</button>
                        <!-- <a href="?page=sales_order" class="btn btn-primary">Back</a> -->
                    </div>
                </div>
	        </div>
	        <form action="" method="POST">
		        <div class="body">
		            <div class="table-responsive">
		                <table class="table table-bordered table-striped table-hover dataTable">
		                    <thead>
		                    	<tr>
	                        		<th>ID Sales Order</th>
	                                <th>
	                                    <input type="text" name="id_so" class="form-control" value="<?php echo $lpk['id_so']; ?>" readonly>
	                                </th>
	                                <th>Pekerjaan</th>
	                        		<th>
	                                    <input type="text" class="form-control" value="<?php echo $lpk['pekerjaan']; ?>" readonly>
	                                </th>            
	                        	</tr>
	                        	<tr> 
	                                <th>Search</th>
	                                <th colspan="2">
	                                    <input type="text" class="form-control">
	                                </th>
	                                <th>
	                                    <!-- Button trigger modal -->
	                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"><i class="material-icons">search</i></button>   
	                                </th>
	                                <th><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">Tambah Data Bahan</button></th>
	                        	</tr>
		                        <tr>
		                            <th>Nama Bahan</th>
		                            <th>Jumlah</th>
		                            <th>Satuan</th>
		                            <th>Harga</th>
		                            <th>Aksi</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                        <?php
		                        	$kb = $_GET['kode_bahan'];
									$qkb = $koneksi->query("SELECT * FROM stok_bahan WHERE kode_bahan = '$kb'");
									$lkb = $qkb->fetch_assoc();
		                        ?>
		                        <tr>
		                            <td><input type="text" class="form-control" name="nama_bahan" value="<?php echo $lkb['nama_bahan'] ?>"></td>
		                            <td><input type="text" class="form-control" name="jumlah" value=""></td>
		                            <td><input type="text" class="form-control" name="satuan" value="<?php echo $lkb['satuan'] ?>"></td>
		                            <td><input type="text" class="form-control" name="harga_jual" value="<?php echo $lkb['harga_jual'] ?>"></td>
		                            <td>
		                                <input type="submit" name="sbahan" value="Tambah" class="btn btn-primary">
		                            </td>
		                        </tr>
		                    </tbody>
		                </table>
		            </div>
		        </div>
		    </div>
		</form>
		<?php
	        if (isset($_POST['sbahan'])) {
	            $id_so = $_POST['id_so'];
	            $id_pekerjaan = $lpk['id_pekerjaan'];
	            $kode_bahan = $lkb['kode_bahan'];
	            $nama_bahan = $_POST['nama_bahan'];
	            $jumlah = $_POST['jumlah'];
	            $satuan = $_POST['satuan'];
	            $harga_jual = $_POST['harga_jual'];
	            
	            $sql = $koneksi->query("INSERT INTO so_bahan VALUES ('','$id_so','$id_pekerjaan','$kode_bahan','$nama_bahan','$jumlah','$satuan','$harga_jual')");

	            if ($sql){
	                ?>
	                <script type="text/javascript">
	                    window.location.href="?page=bahan&id_pekerjaan=<?php echo $lpk['id_pekerjaan']; ?>";
	                </script>               
	                <?php 
	            }
	        }
	    ?>
	   	<div class="card">
	        <div class="body">
	            <div class="table-responsive">
	                <table class="table table-bordered table-striped table-hover dataTable">
	                    <thead>
	                    <tr>
	                    	<th>NO</th>
                            <th>Nama Bahan</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
	                    </thead>
	                    <tbody>
	                        <?php
	                        	$no=1;
	                        	$id_pekerjaan2 = $lpk['id_pekerjaan'];
		                        $sql = $koneksi->query("SELECT * FROM so_bahan WHERE id_pekerjaan='$id_pekerjaan2'");
		                        while ($data = $sql->fetch_assoc()) {
	                        ?>
	                        <tr>
	                        	<td><?php echo $no++; ?></td>
	                            <td><?php echo $data['nama_bahan']?></td>
	                            <td><?php echo $data['jumlah_sb']?></td>
	                            <td><?php echo $data['satuan']?></td>
	                            <td><?php echo $data['harga']?></td>
	                            <td>
	                                <a href="?page=bahan&aksi=ubah&id_bahan=<?php echo $data['id_bahan']?>" class="btn btn-success">Ubah</a>
	                                <a onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ....??????')
	                                " href="?page=bahan&aksi=hapus&id_pekerjaan=<?php echo $lpk['id_pekerjaan'];?>&id_bahan=<?php echo $data['id_bahan'];?>" class="btn btn-danger" >
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
		                        <th>Nama Bahan</th>
		                        <th>Aksi</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <?php
		                    	$no = 1;
			                    $sql = $koneksi->query("SELECT * FROM stok_bahan");
		    	                while ($data = $sql->fetch_array()) {          
		                  	?>
		                    <tr>
		                        <td><?php echo $no++; ?></td>
		                        <td><?php echo $data['nama_bahan']?></td>
		                        <td><a href="?page=bahan&id_pekerjaan=<?php echo $lpk['id_pekerjaan'] ?>&kode_bahan=<?php echo $data['kode_bahan']; ?>" class="btn btn-primary" >Pilih</a></td>
		                    </tr>
		                    <?php } ?>
		                </tbody>
		            </table>
                </div>
            </div>
        </div>
    </div>
</div>

