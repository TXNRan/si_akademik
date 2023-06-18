<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "select * from tb_datapengguna");
$html = '<center><h3>Daftar Pengguna</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
			<tr>
				<th>No</th>
				<th>id</th>
				<th>username</th>
                <th>email</th>
				<th>password</th>
			</tr>';
			$no = 1;
			while ($row = mysqli_fetch_array($query)) {
				$html .= "<tr>
				<td>" . $no . "</td>
				<td>" . $row['id'] . "</td>
                <td>" . $row['username'] . "</td>
                <td>" . $row['email'] . "</td>
				<td>" . $row['password'] . "</td>
				</tr>";
				$no++;
			}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-Data Pengguna.pdf');
