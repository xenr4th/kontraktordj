<?php
    $id_pekerjaan1 = $_GET['id_pekerjaan'];
    $qpk = $koneksi->query("SELECT * FROM so_pekerjaan WHERE id_pekerjaan = $id_pekerjaan1");
    $lpk = $qpk->fetch_assoc();
?>
<!-- Input -->
<div class="card">
    <div class="header">
        <div style="float: left;">
            <h2>DATA BAHAN SALES ORDER</h2>
        </div>
        <div style="float: right;">
            <h2>Pekerjaan : <?php echo $lpk['pekerjaan']; ?></h2>
        </div>
        <br><br>
        <form action="" method="post" id="po" style="margin:5px 10px;">
            <input type="text" name="id_so" value="<?php echo $lpk['id_so']; ?>" hidden >
            <input type="text" name="id_pekerjaan" value="<?php echo $lpk['id_pekerjaan']; ?>" hidden >
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahbahan" style="margin-bottom: 10px;"><i class="material-icons">add_box</i><span>Data Bahan</span></button>
            <!-- <span id="adde"></span> -->
                <div class="table-responsive"> 
                    <table class="table table-bordered table-striped table-hover dataTable">
                        <thead>
                            <tr>
                                <th>Nama Bahan</th>
                                <th>Jumlah</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="addthis">
                        </tbody>
                    </table>
                    <button type="submit" name="sall" title="Isi Semua Input Data" id="sa" class="btn btn-primary" style="margin-top: 10px;"><i class="material-icons">save</i><span>Simpan</span></button>
                    <a href="?page=bahan&aksi=cetak&id_pekerjaan=<?php echo $lpk['id_pekerjaan']; ?>" class="btn btn-primary" >Cetak</a>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
function addto(add){
switch(add){
<?php
$no = 1;
$sql = $koneksi->query("SELECT * FROM stok_bahan");
while ($data = $sql->fetch_array())  {;?>
case '<?= $data['kode_bahan']?>': $('#addthis').append(
"<tr id=\"<?= $data['kode_bahan']?>\">"+
"<td><?= $data['nama_bahan']?>"+
"<input type=\"hidden\" name=\"id_so[]\"  value=\"<?= $lpk['id_so']?>\">"+
"<input type=\"hidden\" name=\"id_pekerjaan[]\"  value=\"<?= $lpk['id_pekerjaan']?>\">"+
"<input type=\"hidden\" id=\"kode\" name=\"kode_bahan[]\"  value=\"<?= $data['kode_bahan']?>\">"+
"<input type=\"hidden\" class=\"form-control\" name=\"id_po[]\" value=\"<?php echo $poai ?>\"/>"+
"<input type=\"hidden\" name=\"nama_bahan[]\"  value=\"<?= $data['nama_bahan']?>\"></td>"+
"<td><input type=\"number\" tab-index=\"1\" name=\"jumlah[]\" value=\"1\" required style=\"padding: 2px;border-style:solid;border-radius: 5px;\" class=\"form-control\"></td>"+
"<td><?= $data['satuan']?>"+
    "<input type=\"hidden\" name=\"satuan[]\"  value=\"<?= $data['satuan']?>\"></td>"+
    "<td><?= $data['harga_jual']?>"+
        "<input type=\"hidden\" name=\"harga[]\"  value=\"<?= $data['harga_jual']?>\"></td>"+
        "<td><button name=\"Hapus\" onclick=\"$('#<?= $data['kode_bahan']?>').remove();\" class=\"btn btn-danger\"><i class=\"material-icons\">delete</i></button></td>"+
    "</tr>")
    ;break;
    <?php } ?>
    }
    }
    </script>
    <?php
    if
    (isset($_POST['kode_bahan'])) {
    $id_so =$_POST['id_so'];
    $id_pekerjaan =$_POST['id_pekerjaan'];
    $kode_bahan =$_POST['kode_bahan'];
    $nama_bahan = $_POST['nama_bahan'];
    $jumlah =$_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $harga =$_POST['harga'];
    $koneksi->prepare("INSERT INTO so_bahan VALUES(:id_bahan,:id_so,:id_pekerjaan,:kode_bahan,:nama_bahan,:jumlah_sb,:satuan,:harga)");
    $i=0;
    $sq;
    foreach ($kode_bahan as $pot){
    $b= $poai;
    $sq=$koneksi->query("INSERT INTO so_bahan VALUES ('','$id_so[$i]','$id_pekerjaan[$i]','$kode_bahan[$i]','$nama_bahan[$i]','$jumlah[$i]','$satuan[$i]','$harga[$i]')");
    $i++;
    }
    if($sq){
    echo "<script>swal(\"Disimpan\",\"Success\").then(function(){window.location.assign('?page=sales_order')});</script>";
    }
    }
    ?>
    <!-- Modal -->
    <div class="modal fade" id="tambahbahan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalScrollableTitle">Data Customer</h2>
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
                                    <th>Harga</th>
                                    <th>Stok</th>
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
                                    <td>Rp. <?php echo number_format($data['harga_jual']) ?></td>
                                    <td><?php echo $data['stok']?></td>
                                    <td>
                                        <button name="pilih" onclick="addto('<?php echo $data['kode_bahan']?>')" class="btn btn-primary"><i class="material-icons">check</i></button>
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
    <div class="modal fade" id="datasupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalScrollableTitle">Data Supplier</h5>
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
                                    <th>Nama Supplier</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM supplier");
                                while ($data = $sql->fetch_array()) {
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama_supplier']?></td>
                                    <td>
                                        <button name="pilih" onclick="choosesup('<?php echo $data['id_supplier']; ?>')" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><i class="material-icons">check</i></button>
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
    <script>
    function choosesup(add){
    switch(add){
    <?php
    $no = 1;
    $sql = $koneksi->query("SELECT * FROM supplier");
    while ($data = $sql->fetch_array()) { ?>
    case '<?= $data['id_supplier']; ?>': $('.nama_supplier').val('<?php echo $data['nama_supplier']; ?>');break;
    <?php } ?>
    }
    }
    </script>

    <!-- swal("<?php echo $data['nama_supplier']; ?>","Dipilih") -->