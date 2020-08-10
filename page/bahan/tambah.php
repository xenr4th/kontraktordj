<div class="row clearfix">
  	<div class="col-lg-8  col-md-12 col-sm-12 col-xs-12">
      	<div class="card">
          	<div class="header">
              	<h2>TAMBAH BAHAN</h2>
          	</div>
           	<div class="body">
           		<form method="POST">
              		<div class="form-group">
                		<input type="hidden" name="idb" class="form-control"  />
                 	</div>
                 	<label for="">ID SO</label>
              		<div class="form-group">
	                   	<div class="form-line">
	                    	<input type="text" name="ids" class="form-control" />
	                   	</div>
	                </div>
	                <label for="">ID PO</label>
              		<div class="form-group">
                   		<div class="form-line">
                        	<input type="text" name="idp" class="form-control" />
                     	</div>
                 	</div>
	                <label for="">Pekerjaan</label>
              		<div class="form-group">
                   		<div class="form-line">
                        	<input type="text" name="pk" class="form-control" />
                     	</div>
                 	</div>
                 	<label for="">Supplier</label>
              		<div class="form-group">
                   		<div class="form-line">
                        	<input type="text" name="supp" class="form-control" />
                     	</div>
                 	</div>
                 	<label for="">Nama Bahan</label>
              		<div class="form-group">
                   		<div class="form-line">
                        	<input type="text" name="bahan" class="form-control" />
                     	</div>
                 	</div>
                 	<label for="">Satuan</label>
              		<div class="form-group">
                        <select name="satuan" class="form-control show-tick">
	                   		<option value="">- Pilih Satuan -</option>
	                   		<option value="meter">meter</option>
	                   		<option value="kilogram">kilogram</option>
	                   		<option value="pcs">pcs</option>
	                   		<option value="liter">liter</option>
	                   	</select>
                    </div>
                 	<label for="">Jumlah</label>
              		<div class="form-group">
                   		<div class="form-line">
                        	<input type="text" name="jml" class="form-control" />
                     	</div>
                 	</div>
                 	<label for="">Harga</label>
              		<div class="form-group">
                   		<div class="form-line">
                        	<input type="text" name="hrg" class="form-control" />
                     	</div>
                 	</div>
                 	<input type="submit" name="simpan" value="simpan" class="btn btn-primary"> 
           		</form>
           	</div>
        </div>
    </div>
</div>
	           	<?php
		           	if(isset($_POST['simpan'])){
			           	$id_bahan = $_POST['idb'];
			           	$id_so = $_POST['ids'];
			           	$id_po = $_POST['idp'];
			           	$pekerjaan = $_POST['pk'];
			           	$supplier = $_POST['supp'];
			           	$nama_bahan = $_POST['bahan'];
			           	$satuan = $_POST['satuan'];
			           	$jumlah = $_POST['jml'];
			           	$harga = $_POST['hrg'];
			           	$sql = $koneksi->query("insert into bahan values('$id_bahan','$id_so','$id_po','$pekerjaan','$supplier','$nama_bahan','$satuan','$jumlah','$harga')");
			           	if ($sql) {
			           		?>
			           		<script type="text/javascript">
			           			alert("Data Berhasil Disimpan");
			           			window.location.href = "?page=barang";
			           		</script>
			           		<?php
			           	}
			        }

			  	?>