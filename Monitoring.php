<?php
	include 'koneksi.php';
	$Koneksi = bukaData();
	$pilihDatabase = mysqli_select_db($Koneksi,"Ultrasonik");
	$dataSQL = mysqli_query($Koneksi, "SELECT Nomor, Jarak FROM tabel_ultrasonik ORDER BY Nomor DESC LIMIT 1");
	
?>




<!doctype html>
<html>
<head>
<meta http-equiv="refresh" content="10" charset="utf-8"> 
<title>Depo Air</title>
<link	rel = "stylesheet"
		type= "text/css"
		href = "styleDepoAir.css" />
</head>

<body>
<center>

<div id="kepalaWeb">
<h2>Universitas Widya Kartika</h2>
<p>Teknik Informatika</p>
</div>


<div id="isiweb">

<p>Monitoring</p>
<?php
	while($data = mysqli_fetch_assoc($dataSQL))
	{
		?>
		<table width="200" border="0">
		  <tr>
			<td>Tabung 1</td>
			</tr>
		  <tr>
			<td height="60"><table width="200" border="0">
			  <tr>
				<td>Ketinggian</td>
				<td>:</td>
				<td>
				<?php echo($data['Jarak']) ?>
				</td>
				<td>lt</td>
				</tr>
			  <tr>
				<td>PH</td>
				<td>:</td>
				<td>&nbsp;</td>
				<td>pH</td>
				</tr>
			  <tr>
				<td>Kejernihan</td>
				<td>:</td>
				<td>&nbsp;</td>
				<td>NTu</td>
				</tr>
			</table></td>
			</tr>
		</table>
		<p>&nbsp;</p>
	<?php
	}
	?>
<table width="200" border="0">
  <tr>
    <td>Tabung 2</td>
  </tr>
  <tr>
    <td><table width="200" border="0">
      <tr>
        <td>Ketinggian</td>
        <td>:</td>
        <td>&nbsp;</td>
        <td>lt</td>
      </tr>
      <tr>
        <td>PH</td>
        <td>:</td>
        <td>&nbsp;</td>
        <td>pH</td>
      </tr>
      <tr>
        <td>Kejernihan</td>
        <td>:</td>
        <td>&nbsp;</td>
        <td>NTu</td>
      </tr>
    </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p><a href="Index.php">Home</a></p>
</div>

<p>&nbsp;</p>

<div id="isiwebFooter">
	<p>Sistem Monitoring dan Kontroling Kartu Stok pada Depo Galon Isi Ulang</p>
</div>

</center>
</body>
</html>