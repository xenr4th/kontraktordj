<?php

require_once __DIR__ . '/vendor/autoload.php';

$koneksi = new mysqli("localhost","root","","wp");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>Daftar mahasiswa</title>
</head>
<body>
<h2>DATA SALES ORDER</h2>
<div class="body">
   	<table border="1" cellpadding="10" cellspacing="0">
	    <tr>
	        <th>No.</th>
	        <th>Pekerjaan</th>
	        <th>Jumlah</th>
	        <th>Satuan</th>
	        <th>Foto</th>
	        <th>Harga</th>
	    </tr>';

	    $no=1;
		$sql = $koneksi->query("SELECT * FROM so_detail");
		while($data = $sql->fetch_assoc()){
	             
$html .= '
		<tr>
            <td>'.$no++.'</td>
            <td>'.$data["pekerjaan"].'</td>
            <td>'.$data["jumlah"].'</td>
            <td>'.$data["satuan"].'</td>
            <td><img src="../../images/'.$data["foto"].'" width="50" height="50" alt=""></td>
            <td>'.$data["harga"].'</td>
		</tr>';
	}


$html .= '</table>
</body>
</html>';


$mpdf->WriteHTML($html);
$mpdf->Output();

?>