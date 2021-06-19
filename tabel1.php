<!DOCTYPE html>
<html>

<head>
  <style>
    * {
      box-sizing: border-box;
    }

    .row {
      margin-left: 2px;
      margin-right: 4px;
    }

    .column {
      float: left;
      width: 20%;
      padding: 2px;
    }

    /* Clearfix (clear floats) */
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 20%;
      border: 1px solid #ddd;
    }

    th,
    td {
      text-align: center;
      padding: 20px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>

<tr class="halaman">
  <table border="1" align="center">
    <thead>
      <h1>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>Jam</th>
          <th>Arus PV (A)</th>
          <th>Arus Battery (A)</th>
          <th>Tegangan PV (V)</th>
          <th>Tegangan Battery (V)</th>
          <th>Daya PV</th>
          <th>Daya Battery</th>
        </tr>
      </h1>
    </thead>
    <tbody>

</html>



</thead>
<tbody>
  <?php $nomor = 1;  ?>
  <?php $ambil = $koneksi->query("SELECT * FROM sensor") ?>
  <?php while ($pecah = $ambil->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $nomor;  ?></td>
      <td><?php echo $pecah['date'];     ?></td>
      <td><?php echo $pecah['time'];      ?></td>
      <td><?php echo $pecah['arus_pv'];     ?></td>
      <td><?php echo $pecah['arus_battery'];     ?></td>
      <td><?php echo $pecah['tegangan_pv'];     ?></td>
      <td><?php echo $pecah['tegangan_bat'];     ?></td>
      <td><?php echo $angka = number_format($pecah['arus_pv'] * $pecah['tegangan_pv'] / 1000, 2);     ?></td>
      <td><?php echo $angka = number_format($pecah['arus_battery'] * $pecah['tegangan_bat'] / 1000, 2);     ?></td>
    </tr>
    <?php $nomor++  ?>
  <?php } ?>
</tbody>
</table>
</tr>