<?php
$kode1 = $_GET['id_bahan'];

$sql = $koneksi->query("SELECT * FROM bahan WHERE id_bahan = $kode1");
$tampil = $sql->fetch_assoc();
$satuan = $tampil['satuan'];


?>

<div class="row clearfix ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                    <div class="card">
                        <div class="header">
                            <h2>
                                UBAH BAHAN
                            </h2>
                            </div>


                            <div class="body">
                            <form method="POST">

                        
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="hidden" name="idb" class="form-control" />
                                        </div>
                                    </div>

                            <label for="">Id SO</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="ids" value="<?php echo $tampil['id_so']; ?>" class="form-control" readonly />
                                        </div>
                                    </div>
                            <label for="">Id PO</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="idp" value="<?php echo $tampil['id_po']; ?>" class="form-control" readonly />
                                        </div>
                                    </div>
                            <label for="">Pekerjaan</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="pkj" value="<?php echo $tampil['pekerjaan']; ?>" class="form-control" />
                                        </div>
                                    </div>
                            <label for="">Supplier</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="splr" value="<?php echo $tampil['supplier']; ?>" class="form-control" />
                                        </div>
                                    </div>

                            <label for="">Nama Bahan</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="bahan" value="<?php echo $tampil['nama_bahan']; ?>" class="form-control" />
                                        </div>
                                    </div>
                            <label for="">Satuan</label>
                            <div class="form-group">
                                        <div class="form-line">
                                    <select name="satuan" class="form-control show-tick">

                                        
                                        <option value="meter" <?php if ($satuan=='meter') { echo "selected"; }  ?>>Meter</option>
                                        <option value="kg"<?php if ($satuan=='kg'){echo "selected";}  ?>>Kilogram</option>
                                        <option value="pcs"<?php if ($satuan=='pcs'){echo "selected";}  ?>>Pcs</option>
                                        <option value="liter"<?php if ($satuan=='liter'){echo "selected";}  ?>>Liter</option>
                                        
                                    </select>
                                </div>
                                </div>

                            <label for="">Jumlah</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="jml" value="<?php echo $tampil['jumlah']; ?>" class="form-control" />
                                        </div>
                                    </div>
                            <label for="">Harga</label>
                            <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="hrg" value="<?php echo $tampil['harga']; ?>" class="form-control" />
                                        </div>
                                    </div>

                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                            </form>

           </div>
        </div>
    </div>

                        


<?php 

if (isset($_POST['simpan'])){

   
    $idso = $_POST['ids'];
    $idpo = $_POST['idp'];
    $pekerjaan = $_POST['pkj'];
    $supplier = $_POST['splr'];
    $bahan = $_POST['bahan'];
    $satuan = $_POST['satuan'];
    $jumlah = $_POST['jml'];
    $harga = $_POST['hrg'];

    $sql1 = $koneksi->query("UPDATE bahan SET id_so='$idso', id_po='$idpo', pekerjaan='$pekerjaan', supplier='$supplier', nama_bahan='$bahan', satuan='$satuan',
    jumlah='$jumlah', harga='$harga' WHERE id_bahan='$kode1'");

    if($sql1){
        ?>

            <script type="text/javascript">
                alert("Data berhasil diubah");
                window.location.href="?page=barang";
            </script>
            <?php
    }


}

?>