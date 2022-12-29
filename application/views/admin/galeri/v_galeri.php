
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder text-white mb-0 mt-4"><font size="7">Table Galeri</font></h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-body pb-2">
              <div class="table-responsive p-0">
                <div class="d-grid gap-2 d-md-flex content-md-end mt-3">
                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add New
                </button>

                <a href="<?php echo base_url('admin/index'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Back</a><br><br>
                </div>
                <table class="table align-items-center mb-0">
                <thead align="center">
                  <tr>
                    <th>No</th>
                    <th>Nama Galeri</th>
                    <th>Galeri</th>
                    <th>Id User</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody align="center">
                  <?php $no=1;
                  foreach($galeri as $item){
                    ?>
                    <tr>
                      <td><?= $no++;?></td>
                      <td><?= $item['foto_galeri'];?></td>
                      <td><img height="300" width="300" class="mb-2" src="<?= base_url() ?>/assets/img/testi/<?= $item['foto_galeri'];?>"></td>
                      <td><?= $item['id_user']; ?></td>
                      <td>
                        <a href="#" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $item['id_galeri']; ?>">Edit</a>
                        <a href="<?= base_url('delete_galeri/') . $item['id_galeri']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

<!-- Modal Tambah-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form enctype="multipart/form-data" action="<?= base_url('galeri/insert');?>" method="POST">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Page Add New </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label>Foto</label>
              <input type="file" name="img" class="form-control" size="50">
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input type="text" name="deskripsi" class="form-control">
            </div>
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label>ID User</label>
              <input type="number" name="id_user" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
          <a class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
        </div>
    </div>
  </div>
</div>


<!-- Modal untuk edit-->
<?php $no = 0;
foreach ($galeri as $item) : $no++; ?>
    <div class="modal fade" id="editmodal<?php echo $item['id_galeri']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form enctype="multipart/form-data" action="<?= base_url('galeri/update/') . $item['id_galeri'];?>" method="POST">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>foto</label>
                        <input type="file" name="img" class="form-control" size="50">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="<?php echo $item['deskripsi']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $item['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label>ID User</label>
                        <input type="number" name="id_user" class="form-control" value="<?php echo $item['id_user']; ?>">
                    </div>
                </div>
                <div class=" modal-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
              </form>
                  <a class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>