<div class="container">

	<h3>Daftar Mahasiswa</h3>
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody>

  	<?php $i=1; ?>

  	<?php foreach ($mahasiswa as $mhs): ?>
    <tr>
      <th><?php echo $i; ?></th>
      <td><?php echo $mhs['Nama'] ?></td>
      <td><?php echo $mhs['NIM'] ?></td>
      <td><?php echo $mhs['email'] ?></td>
      <td><?php echo $mhs['jurusan'] ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
	
</div>