<?php
$id_worker1 = $_GET['id'];
$sql = $koneksi->query("SELECT * from worker where id_worker ='$id_worker1'");
$tampil = $sql->fetch_assoc();
$kategori = $tampil['kategori'];
?>
<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	    <div class="card">
	        <div class="header">
	            <h2>UBAH WORKER</h2>
	        </div>
	        <div class="body">
	        	<form method="POST">
	        		<div class="form-group">
	                    <label for="">Nama Worker</label>
	                    <div class="form-group">
	                        <div class="form-line">
	                            <input type="text" name="nama" value="<?php echo $tampil['nama_worker']; ?>" class="form-control"/>
	                        </div>
	                    </div>
	                    <label for="">Alamat</label>
	                    <div class="form-group">
	                        <div class="form-line">
	                            <input type="text" name="alamat" value="<?php echo $tampil['alamat']; ?>" class="form-control"/>
	                        </div>
	                    </div>
	                    <label for="">No Hp</label>
	                    <div class="form-group">
	                        <div class="form-line">
	                            <input type="number" name="no" value="<?php echo $tampil['no_hp']; ?>" class="form-control"/>
	                        </div>
	                    </div>
	                    <label for="">Kategori</label>
	                    <div class="form-group">
	                        <div class="form-line">
		            			<select name="kategori" class="form-control show-tick">
			                        <option value="Mandor" <?php if ($Kategori=='Mandor') { echo "selected"; } ?>>Mandor</option>
			                        <option value="Kuli" <?php if ($kategori=='Kuli'){ echo "selected"; } ?>>Kuli</option>
			                    </select>
		                	</div>
	           			</div>
	           			<label for="">Gaji/Hari</label>
	           			<div class="form-group">
	                        <div class="form-line">
	                            <input type="text" name="gaji" value="<?php echo $tampil['gaji']; ?>" class="form-control"/>
	                        </div>
	                    </div>
	                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
	                </div>
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

	 $sql1 = $koneksi->query("UPDATE worker SET nama_worker='$nama_worker', alamat='$alamat', no_hp='$no', kategori='$kategori', gaji='$gaji' WHERE id_worker='$id_worker1'");
	if($sql1){
		?>

			<script type="text/javascript">
				window.location.href="?page=mworker";
			</script>
			<?php
	}


}
?>



                           

