<?php

require_once __DIR__ . '/vendor/autoload.php';

$koneksi = new mysqli("localhost","root","","wp");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>
<style>
	.head{
	border-bottom: 2px solid black;
    text-align: center;
	}
	.amid .mid .kpd{
	}
</style>
	<div class="head my-5">
	<h3>PT. Bandja</h3>
	<p>Jl. Simpang Lima No. 100 BSB City, telp (021 100 0001) Semarang</p>
	</div>
	<div class="amid mb-5">
    <div class="mid">
    	<div class="kpd mt-3">
    	<p class="mt-2 ml-2">No :</p>
        <p class="ml-2">Lamp :</p>
        <p class="ml-2">Hal :</p><br>
        <p> Dengan hormat,</p>
        <p> Sehubungan dengan kurangnya persedian barang dikantor, kami mengharapkan saudara mengirimkan barang-barang sebagai berikut:</p>
        </div>
          </div>
            </div>
<div class="body">
   	<table border="1" cellpadding="10" cellspacing="0">
	    <tr>
        <th>Kode Bahan</th>
        <th>Nama Bahan</th>
        <th>Kategori</th>
        <th>Satuan</th>
        <th>Harga Jual</th>
        <th>Stok</th>
	    </tr>';

		$sql = $koneksi->query("SELECT * FROM stok_bahan");
		while($data = $sql->fetch_assoc()){
	             
$html .= '
		<tr>
            <td>'.$data["kode_bahan"].'</td>
            <td>'.$data["nama_bahan"].'</td>
            <td>'.$data["kategori"].'</td>
            <td>'.$data["satuan"].'</td>
            <td>'.$data["harga_jual"].'</td>
            <td>'.$data["stok"].'</td>
		</tr>';
	}


$html .= '</table>
<p > Barang-barang yang kami pesan diatas harap tiba digudang kami paling lambat 1 minggu. Dan mengenai pembayaran akan kami lakukan setelah barang sampai ditempat.</p>
                                    <p> Atas perhatian saudara kami ucapkan terima kasih</p>
                                    <div class="bot">
                                    <p>Semarang, </p>
                                    <p class="ml-5">Hormat Kami</p>
                                    <br><br>
                                    <p class="ml-4">(Manager PT. Bandja)</p>
                                  </div>

                                </div>
</body>
</html>';


$mpdf->WriteHTML($html);
$mpdf->Output();

?>