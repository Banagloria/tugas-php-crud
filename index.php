<?php include 'crud.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gloria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-md">
    <a class="navbar-brand" href="#">Pemograman php</a>
  </div>
</nav>

<div class="container">
      <!-- Content here -->
          <h2> CRUD DAFTAR DAN PENJUALAN</h2>
  
          <!-- Button tambah data -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata"> Tambah Data  </button>

        <!-- Modal Tambah Data -->
        <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <form method="post">
                    <div class="modal-body">
                      <input type="text" name="namapenjualan" class="form-control" placeholder="Nama Penjualan"><br>
                      <input type="date" name="tanggalpenjualan" class="form-control" placeholder="Tanggal Penjualan"><br>
                      <input type="text" name="keterangan" class="form-control" placeholder="Keterangan"><br>
                      <input type="number" name="jumlahpenjualan" class="form-control" placeholder="Jumlah Penjualan"><br>
                      
                      
              </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="tambahdata" value="Tambah Data"
                  </div>
               
                </div>
                </form>
          </div>
        </div>
          
          
          
        </div>
    

        <!-- Modal Ubah Data -->
        <?php foreach ($AmbilData as $data):?>
        <div class="modal fade" id="<?= $data ['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <form method="post">
                    <div class="modal-body">
                        <input type="number" name="id"  value="<?= $data['id']?>" class="form-control" placeholder="id" hidden>
                      <input type="text" name="namapenjualan" value="<?= $data['namapenjualan']?>" class="form-control" placeholder="Nama Penjualan"><br>
                      <input type="date" name="tanggalpenjualan" value="<?=$data['tanggalpenjualan']?>" class="form-control" placeholder="Tanggal Penjualan"><br>
                      <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" placeholder="Keterangan"><br>
                      <input type="number" name="jumlahpenjualan" value="<?=$data['jumlahpenjualan']?>" class="form-control" placeholder="Jumlah Penjualan"><br>
                      
                      
              </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="ubahdata" value="Ubah Data">
                  </div>
               
                </div>
                </form>
          </div>
        </div>
          
          
          
        </div>
        <?php endforeach;?>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Penjualan</th>
              <th scope="col">Tanggal Penjualan</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Jumlah Penjualan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($AmbilData as $data):?>
            <tr>
              <td><?= $data['namapenjualan']?></td>
              <td><?= $data['tanggalpenjualan']?></td>
              <td><?= $data['keterangan']?></td>
              <td><?= $data['jumlahpenjualan']?></td>
              <td>
                  <form method="post">
                      <!-- Button ubah data -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?=$data['id']?>">
                    Ubah Data
                 </button>
                 <input type="hidden" name="id" value="<?=$data['id']?>">
                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus Data">
    
                  </form>
          </td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>