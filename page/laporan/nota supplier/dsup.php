<!-- #END# Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Supplier</th>
                                <th>Tanggal PO</th>
                                <th>Cetak</th>
                            </tr>
                        </thead>
                        <?php 
                            $no=1;
                            $sql = $koneksi->query("SELECT * FROM purchase_order");
                            while($data = $sql->fetch_assoc()){
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_supplier']; ?></td>
                                <td><?php echo $data['tanggal_po']; ?></td>
                                <td><a href="?page=nota_supplier&aksi=sp&id_po=<?php echo $data['id_po'] ?>" class="btn btn-primary" >Lihat Laporan</a></td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                    <a href="page/laporan/lapSo/cetak.php" target="blank" class ="btn btn-primary" target="_blank"><i class="material-icons">print</i><span>PRINT</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
               



