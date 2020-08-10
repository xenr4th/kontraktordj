<?php

require_once __DIR__ . '/vendor/autoload.php';

$koneksi = new mysqli("localhost","root","","wp");

$pkp = $_GET['id_pekerjaan'];

$mpdf = new \Mpdf\Mpdf();

$html ='

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
	<div class="header">
		<div class="header">
            <style>
                .head{
                    border-bottom: 2px solid black;
                }
            </style>
            <h2>Nota</h2>
            <div class="head text-center my-3">
                <h3>Kontraktor DJ Teknik</h3>
                <p>Jl. Simpang Lima No. 100 BSB City, telp (021 100 0001) Semarang</p>
            </div>
            <div class="amid mb-5">
                <div class="mid">
                    <div class="kpd mt-3">
                        <p>';
                            $tanggal= mktime(date("m"),date("d"),date("Y"));
                            echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
                            date_default_timezone_set('Asia/Jakarta');
                            $jam=date("H:i:s");
                            echo "| Pukul : <b>". $jam." "."</b>";
                            $a = date ("H");
                            if (($a>=6) && ($a<=11)){
                            echo "<b>, Selamat Pagi !!</b>";
                            }
                            else if(($a>11) && ($a<=15))
                            {
                            echo ", Selamat Pagi !!";}
                            else if (($a>15) && ($a<=18)){
                            echo ", Selamat Siang !!";}
                            else { echo ", <b> Selamat Malam </b>";}
                        '</p>
                        <br>
                        <p class="mt-2 ml-2">No : </p>
                        <p class="ml-2">Lamp : </p>
                        <p class="ml-2">Hal : </p><br>
                        <p> Dengan hormat,</p><br>
                        <p> Sehubungan dengan kurangnya persedian barang dikantor, kami mengharapkan saudara mengirimkan barang-barang sebagai berikut:</p>
                    </div>
                </div>
            </div>
		    <div class="table-responsive">
		        <div class"body">
		            <table border="1" cellpadding="10" cellspacing="0">
	                    <tr>
	                        <th>No</th>
	                        <th>Kode Bahan</th>
	                        <th>Jumlah</th>
	                        <th>Satuan</th>
	                        <th>Harga</th>
	                    </tr>';

                            $no=1;
                            $sql = $koneksi->query("SELECT * FROM so_bahan WHERE id_pekerjaan='$pkp'");
                            while($data = $sql->fetch_assoc()){

$html .= '

                    <tr>
                        <td>'. $no++ .'</td>
                        <td>'. $data['kode_bahan'] .'</td>
                        <td>'. $data['nama_bahan'] .'</td>
                        <td>'. $data['jumlah_sb'] .'</td>
                        <td>'. $data['satuan'] .'</td>
                        <td>'. $data['harga'] .'</td>
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