<?php

require_once __DIR__ . '/vendor/autoload.php';

$koneksi = new mysqli("localhost","root","","wp");

$mpdf = new \Mpdf\Mpdf();

$html ='

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
	<div class="body">
	    <div class="table-responsive">
	        <div class"body">
	            <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Pekerjaan</th>
                        <th>jumlah</th>
                        <th>Satuan</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Tanggal So</th>
                    </tr>';

                        $no =1;
                        $sql = $koneksi->query("SELECT sales_order.nama_customer, sales_order.tanggal_so, so_pekerjaan.pekerjaan, so_pekerjaan.jumlah, so_pekerjaan.satuan, so_pekerjaan.foto, so_pekerjaan.harga FROM sales_order INNER JOIN so_pekerjaan ON sales_order.id_so=so_pekerjaan.id_so");
                        while($data = $sql->fetch_assoc()){

$html .= '

                    <tr>
                        <td>'. $no++ .'</td>
                        <td>'. $data['nama_customer'] .'</td>
                        <td>'. $data['pekerjaan'] .'</td>
                        <td>'. $data['jumlah'] .'</td>
                        <td>'. $data['satuan'] .'</td>
                        <td><img src="../../../images/'. $data['foto'] .'" width="50" height="50"></td>
                        <td>'. $data['harga'] .'</td>
                        <td>'. $data['tanggal_so'] .'</td>

                    </tr>';

                    }

$html .= '      </table>
            </div>
        </div>
    </div>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output();
?>