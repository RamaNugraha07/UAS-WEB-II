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
                <b>Tambah siswa</b>
            </div>
            
            <div class="card-body">
            
                <?= form_open('/siswa/create') ?>

                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input class="form-control" type="text" value="" name="nama">                    
                </div>
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki">
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
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                    <input class="form-control" type="text" value="" name="tempat_lahir">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                    <input class="form-control" type="date" value="" name="tanggal_lahir">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input class="form-control" type="text" value="" name="alamat">                    
                </div>
                

                <button class="btn btn-primary" >Save</button>
                <a href="<?= site_url("/siswa") ?>">Cancel</a>

                </form>
               
            </div>
                
            
        </div>
    </div>
</body>
</html>