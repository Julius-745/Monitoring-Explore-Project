<div class="halaman" >
  <table border="1" align="center">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>Arus(Ampere)</th>
                      <th>Tegangan(Volt)</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $nomor=1;  ?>
                  <?php $ambil=$koneksi-> query("SELECT * FROM plts3") ?>
                  <?php while ( $pecah=$ambil -> fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $nomor;  ?></td>
                      <td><?php echo $pecah['Tanggal'];     ?></td>
                      <td><?php echo $pecah['Jam'];      ?></td>
                      <td><?php echo $pecah['Arus'];     ?></td>
                      <td><?php echo $pecah['Tegangan'];     ?></td>
                      <td><?php echo $angka = number_format($pecah['Arus']*$pecah['Tegangan']/1000,2);?></td>
                      <td>
                      <a href="index.php?page=hapusnilai3&id=<?php echo $pecah['id'];?>">HAPUS</a>
                    </td>
                    </tr>
                    <?php $nomor++  ?>
                  <?php } ?>
                  </tbody>
                </table>
</div>
