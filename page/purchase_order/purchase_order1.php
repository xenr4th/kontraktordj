<!-- Input -->
<div class="card">
    <div class="header">
            <div class="col-lg-6 m-r-50">
                <h2>DATA PURCHASE ORDER</h2>
            </div>
            <?php
            $sp = $_POST['id_sup'];
            $qsp = $koneksi->query("SELECT * FROM supplier WHERE id_supplier = '$sp'");
            $lsp = $qsp->fetch_assoc();
            if($lsp!=null){
            $_SESSION['nama_supplier']=$lsp['nama_supplier'];
            }
            $ai = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'wp' AND TABLE_NAME = 'purchase_order'";
            $sqlai = $koneksi->query("SHOW TABLE STATUS LIKE 'purchase_order'");
            $row = $sqlai->fetch_assoc();
            $tgl=date('d-m-Y');
            $poai = $row['Auto_increment'];
            ?>
            <br>
            <form action="" method="post" id="po" style="margin:5px 10px;">
                <br>
                <div style="float: right;margin-right: 50px;">
                <input type="text" name="nama_supplier" class="nama_supplier" class="form-control" required style="margin-left: 10px;padding: 2px;border-style:solid;border-radius: 5px;" autocomplete="off" readonly>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#datasupplier">Pilih Supplier</button>
                </div>
                <br><br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahbahan" >Tambah Data Bahan</button>
                <!-- <span id="adde"></span> -->
                <div class="card"> <div class="body"> <div class="table-responsive"> <table
                    class="table table-bordered table-striped table-hover dataTable">
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
                <br>
                <button type="submit" name="sall" title="Isi Semua Input Data" id="sa" class="btn btn-primary">Save</button>
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
while ($data = $sql->fetch_array()) {;?>
case '<?= $data['kode_bahan']?>': $('#addthis').append(
"<tr id=\"<?= $data['kode_bahan']?>\">"+
"<td><?= $data['nama_bahan']?>"+
"<input type=\"hidden\" id=\"kode\" name=\"kode_bahan[]\"  value=\"<?= $data['kode_bahan']?>\">"+
"<input type=\"hidden\" class=\"form-control\" name=\"id_po[]\" value=\"<?php echo $poai ?>\"/>"+
"<input type=\"hidden\" name=\"nama_bahan[]\"  value=\"<?= $data['nama_bahan']?>\"></td>"+
"<td><input type=\"number\" tab-index=\"1\" name=\"jumlah[]\" value=\"1\" required style=\"padding: 2px;border-style:solid;border-radius: 5px;\"></td>"+
"<td><?= $data['satuan']?>"+
    "<input type=\"hidden\" name=\"satuan[]\"  value=\"<?= $data['satuan']?>\"></td>"+
    "<td><?= $data['harga_jual']?>"+
        "<input type=\"hidden\" name=\"harga[]\"  value=\"<?= $data['harga_jual']?>\"></td>"+
        "<td><button name=\"Hapus\" onclick=\"$('#<?= $data['kode_bahan']?>').remove();\" class=\"btn btn-danger\">Hapus</button></td>"+
    "</tr>")
    ;break;
    <?php } ?>
    }
    }
    </script>
    <?php
    if
    (isset($_POST['kode_bahan'])) {
    $supplier=$_POST['nama_supplier'];
    $tgl=date('Y-m-d');
    $sql = $koneksi->query("INSERT INTO purchase_order VALUES ('','$supplier','$tgl')");
    $kode_bahan =$_POST['kode_bahan'];
    $id_po =$_POST['id_po'];
    $nama_bahan = $_POST['nama_bahan'];
    $jumlah =$_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $harga =$_POST['harga'];
    $koneksi->prepare("INSERT INTO po_bahan VALUES(:id_pb,:kode_bahan,:id_po,:nama_bahan,:jumlah_pb,:satuan,:harga)");
    $i=0;
    $sq;
    foreach ($kode_bahan as $pot){
    $b= $poai;
    $sq=$koneksi->query("INSERT INTO po_bahan VALUES ('','$kode_bahan[$i]','$id_po[$i]','$nama_bahan[$i]','$jumlah[$i]','$satuan[$i]','$harga[$i]')");
    $i++;
    }
    if($sq){
    echo "<script>swal(\"Disimpan\",\"Success\").then(function(){window.location.assign('?page=purchase_order')});</script>";
    }
    }
    ?>
    <!-- Modal -->
    <div class="modal fade" id="tambahbahan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
                                    <td><?php echo $data['stok']?></td>
                                    <td>
                                        <button name="pilih" onclick="addto('<?php echo $data['kode_bahan']?>')" class="btn btn-primary">Pilih</button>
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
                                        <button name="pilih" onclick="choosesup('<?php echo $data['id_supplier']; ?>')" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Pilih</button>
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