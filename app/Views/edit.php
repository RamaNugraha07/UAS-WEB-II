<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">

            <div class="card-header">
                <b>Edit Siswa</b>
            </div>
            
            <div class="card-body">
                           
                <?= form_open('/siswa/update/'.$edit->nis) ?>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nis</label>
                    <input class="form-control" type="text" value="<?= $edit->nis; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input class="form-control" type="text" value="<?= $edit->nama; ?>" name="nama">                    
                </div>
                <div class="mb-3">
                    <?php
                    if($edit->jenis_kelamin == "laki") {
                    ?>

                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="laki" checked>
                        <label class="form-check-label">
                            laki
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="perempuan">
                        <label class="form-check-label">
                            perempuan
                        </label>
                    </div>
                    
                    <?php

                    }else{
                 ?>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="laki">
                        <label class="form-check-label">
                            laki
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="perempuan" checked>
                        <label class="form-check-label">
                            perempuan
                        </label>
                    </div>

                    <?php

                    }
                    
                    ?>
                                     
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                    <input class="form-control" type="text" value="<?= $edit->tempat_lahir; ?>" name="tempat_lahir">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                    <input class="form-control" type="date" value="<?= $edit->tanggal_lahir; ?>" name="tanggal_lahir">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input class="form-control" type="text" value="<?= $edit->Alamat; ?>" name="alamat">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                    <input class="form-control" type="text" value="<?= $edit->Kelas; ?>" name="kelas">                    
                </div>

                <button class="btn btn-primary" >Save</button>
                <a href="<?= site_url("/siswa") ?>">Cancel</a>

                </form>
               
            </div>
                
            
        </div>
    </div>
</body>
</html>