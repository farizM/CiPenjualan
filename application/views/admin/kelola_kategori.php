

<<<<<<< HEAD
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-12 grid-margin">
          <div class="card card-statistics">
            <div class='card-header'">
              Kelola Kategori
            </div>
            <div class="card-body p-0">
              <div class="row" style="padding:10px">
                <div class='col-md-6'>
                  <form action="<?= base_url('admin/addKategori') ?>" method="post">

                    <div class='form-group'>
                      <label>Nama Kategori</label>
                      <input type="text" name='kategori_nama' class='form-control'>
=======
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card card-statistics">
              <div class='card-header'>
                Kelola Kategori
              </div>
                <div class="card-body p-0">
                  <div class="row" style="padding:10px">
                    <div class='col-md-6'>
                      <form action="<?= base_url('addKategori') ?>" method="post">

                        <div class='form-group'>
                          <label>Id Kategori</label>
                          <input type="text" name='nama' class='form-control'>
                        </div>

                        <div class='form-group'>
                          <label>Nama Kategori</label>
                          <input type="text" name='harga' class='form-control'>
                        </div>
                        <button class='btn btn-success btn-block'>Tambah </button>
                      </form>
>>>>>>> 3c3248bab670d72b706e92d7b8420471254e5a83
                    </div>

<<<<<<< HEAD
                    <button class='btn btn-success btn-block'>Tambah</button>
                  </form>
                </div>
                <div class='col-md-6'>

                  <table class='table table-condensed'>

                    <tr>
                      <th>No</th>
                      <th>Nama Kategori</th>
                      <th>Aksi</th>
                    </tr>

                    <?php 
                    $no = 1;
                    foreach($tb_kategori as $u){ 
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u->nama_kategori ?></td>
                        <td>
                          <a href="<?=base_url('admin/deleteKategori/').$u->kategori_id?>" class="btn btn-danger">Hapus</a>
                          <button class="btn btn-success">Update</button>
                        </td>
                      </tr>
                    <?php } ?>

=======
                      <table class='table table-condensed'>
                        <tr>
                          <th>No</th>
                          <th>Nama Kategori</th>
                          <th>Aksi</th>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>ATK</td>
                          <td>
                            <button type="button" name="button" class="btn btn-danger">Hapus</button>
                            <button type="button" name="button" class="btn btn-success">Edit</button>
                          </td>

                        </tr>
                      </table>
>>>>>>> 3c3248bab670d72b706e92d7b8420471254e5a83

                  </table>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
