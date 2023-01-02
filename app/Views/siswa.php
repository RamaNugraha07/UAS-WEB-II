<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data siswa</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <b>Data siswa</b>
                <a href="<?= site_url("/logout")?> " class="btn btn-primary mr-3 " >Logout</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                <a href="<?= site_url("/siswa/add")?> " class="btn btn-primary">Tambah Siswa</a>
                    <tr>
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Kelas</th>
                        <th>Action</th>
                       
                    </tr>
                    <?php
                    foreach ($siswa as $row) : ?>
                        <tr>
                            <td><?php echo $row->nis; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->jenis_kelamin; ?></td>
                            <td><?php echo $row->tempat_lahir; ?></td>
                            <td><?php echo $row->tanggal_lahir; ?></td>
                            <td><?php echo $row->Alamat; ?></td>
                            <td><?php echo $row->Kelas; ?></td>
                            <td><a class="btn btn-danger" href="<?= base_url(); ?>/siswa/delete/<?= $row->nis; ?>"><i class="bi bi-trash3"></i> Hapus</a>
                            <a class="btn btn-warning" href="<?= base_url(); ?>/siswa/edit/<?= $row->nis; ?>"><i class="bi bi-trash3"></i> Edit</a>
                        </tr>
                    <?php endforeach; ?>
                </table>
     
            </div>
        </div>
    </div>
</body>
</html>