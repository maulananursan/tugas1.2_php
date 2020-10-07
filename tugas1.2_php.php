<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Daftar Makanan</h3>
	<?php 
		$m1='Ayam Goyeng';
		$m2='Ayam Bakar';
		$m3='Ayam Sayur';
		$m4='Tempe Goreng';
		$m5='Tahu Goreng';
		$m6='Soto';
		$m7='Nasi Putih';
		$m8='Es Teh';
		$m9='Es Tebu';

		$h1= 13000;
		$h2= 15000;
		$h3= 13000;
		$h4= 1000;
		$h5= 1000;
		$h6= 3000;
		$h7= 5000;
		$h8= 4000;
		$h9= 5000;
	?>

	<table border = '1'>
		<tr>
		<td>No</td>
		<td>Nama Menu</td>
		<td>Harga</td>
		</tr>

		<tr>
		<td>1</td>
		<td><?php echo $m1; ?></td>
		<td>Rp. <?php echo $h1; ?></td>
		</tr>

		<tr>
		<td>2</td>
		<td><?php echo $m2; ?></td>
		<td>Rp. <?php echo $h2; ?></td>
		</tr>

		<tr>
		<td>3</td>
		<td><?php echo $m3; ?></td>
		<td>Rp. <?php echo $h3; ?></td>
		</tr>

		<tr>
		<td>4</td>
		<td><?php echo $m4; ?></td>
		<td>Rp. <?php echo $h4; ?></td>
		</tr>

		<tr>
		<td>5</td>
		<td><?php echo $m5; ?></td>
		<td>Rp. <?php echo $h5; ?></td>
		</tr>

		<td>6</td>
		<td><?php echo $m6; ?></td>
		<td>Rp. <?php echo $h6; ?></td>
		</tr>
		
		<tr>
		<td>7</td>
		<td><?php echo $m7; ?></td>
		<td>Rp. <?php echo $h7; ?></td>
		</tr>

		<tr>
		<td>8</td>
		<td><?php echo $m8; ?></td>
		<td>Rp. <?php echo $h8; ?></td>
		</tr>
		<tr>

		<td>9</td>
		<td><?php echo $m9; ?></td>
		<td>Rp. <?php echo $h9; ?></td>
		</tr>
		<tr>


</table>

</body>
</html>
