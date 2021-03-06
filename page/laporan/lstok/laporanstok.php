<!-- Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA PURCHASE ORDER
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal PO</th>
                                <th>Nama Bahan</th>
                                <th>Stok Awal</th>
                                <th>Stok Masuk</th>
                                <!-- <th>Stok Keluar</th> -->
                                <th>Stok Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1;
                                $sql = $koneksi->query("SELECT purchase_order.tanggal_po, stok_bahan.stok, po_bahan.jumlah_pb, po_bahan.nama_bahan, so_bahan.jumlah_sb FROM po_bahan INNER JOIN purchase_order ON po_bahan.id_po=purchase_order.id_po INNER JOIN stok_bahan ON po_bahan.kode_bahan=stok_bahan.kode_bahan INNER JOIN so_bahan ON po_bahan.kode_bahan=so_bahan.kode_bahan");
                                while($data = $sql->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['tanggal_po']; ?></td>
                                <td><?php echo $data['nama_bahan']; ?></td>
                                <td><?php echo $data['stok'] ?></td>
                                <td><?php echo $data['jumlah_pb']; ?></td>
                                <!-- <td></td> -->
                                <td><?php echo $data['stok']+$data['jumlah_pb']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>