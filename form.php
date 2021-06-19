<div class="halaman">
	<table border="1" align="center">
		<tr class="bg-primary">
			<th align="center">INPUT</th>

		</tr>
		<tr>
			<td>
				<form action='#' method='post' border='0'>
					<table>
						<tr>
							<td>Date</td>
							<td><input type='date' name='date' /></td>
						</tr>
						<tr>
							<td>Time</td>
							<td><input type='time' name='time' /></td>
						</tr>
						<tr>
							<td>Arus PV </td>
							<td><input type='text' name='arus_pv' /></td>
						</tr>
		</tr>
		<tr>
			<td>Arus Battery </td>
			<td><input type='text' name='arus_battery' /></td>
		</tr>
		<tr>
			<td>Tegangan PV </td>
			<td><input type='text' name='tegangan_pv' /></td>
		</tr>
		<tr>
		<tr>
			<td>Tegangan Battery </td>
			<td><input type='text' name='tegangan_bat' /></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button name="save1">Simpan</button>
			</td>
		</tr>
	</table>
	</form>
	</td>


	<?php
	if (isset($_POST['save1'])) {
		$koneksi->query("INSERT INTO sensor(date,time,arus_pv,arus_battery,tegangan_pv,tegangan_bat) VALUES ('$_POST[date]','$_POST[time]','$_POST[arus_pv]','$_POST[arus_battery]','$_POST[tegangan_pv]','$_POST[tegangan_bat]') ");
		echo "<div class='alert alert-info'>Data tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?page=plts1'>";
	}



	?>

</div>