<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
</head>

<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed : ".mysqli_connect_error());
	} 

	$sql = "SELECT NAMA, EMAIL, ISI FROM buku_tamu";
	$result = mysqli_query($conn, $sql);


?>
<body>

	<center><h1>Buku Tamu</h1>
		<!-- <form method="POST">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="textbox" name="nama"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="textbox" name="email"></td>
				</tr>
				<tr>
					<td>Isi</td>
					<td>:</td>
					<td width="100px" height="50px"><textarea></textarea></td>
				</tr>

				<tr>
					<td></td>
					<TD></TD>
					<td><input type="submit" name="sent" value="Selesai">

					</td>
				</tr>

			</table>
		</form> -->
		<table border="all">
			<caption>Daftar Buku Tamu </caption>
			<br>
			<thead>
				<tr>
					<th>Nama</th>
					<th>Email</th>
					<th>Isi</th>
				</tr>
			</thead>
			<tbody>
				<?php

	if (mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)) {
			echo '<tr>
		<td>'.$row['NAMA'].'</td>
		<td>'.$row['EMAIL'].'</td>
		<td>'.$row['ISI'].'</td>
	</tr>';
		}
	} else {
		echo "0 results";
	}

	mysqli_close($conn);
				?>
			</tbody>
			
		</table>
	</center>
	<?php

	?>



</body>
</html>