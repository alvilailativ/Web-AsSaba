
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder text-white mb-0 mt-4"><font size="7">Table User</font></h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-body pb-1 mb-2">
              <div class="table-responsive p-0">
            <div class="d-grid gap-2 d-md-flex content-md-end mt-3">
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Add New
            </button>
            <a href="<?php echo base_url('admin'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Back</a><br><br>
            
            </div>
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr align="center">
                      <th>No</th>
                      <th>Action</th>
                      <th>Username</th>
                      <th>Password</th>
                    </tr>
                  </thead>
                    <tbody align="center">
                    <?php $no=1;
                    foreach($user as $item){
                      ?>
                      <tr>
                        <td><?= $no++;?></td>
                        <td>
                          <a href="#" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $item['id_user']; ?>">Edit</a>
                          <a href="<?= base_url('delete_user/') . $item['id_user']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>
                          <td><?= $item['username'];?></td>
                          <td><?= $item['password']; ?></td>
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
      <form action="<?= base_url('user/insert');?>" method="POST">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Page Add New </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control">
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
foreach ($user as $item) : $no++; ?>
    <div class="modal fade" id="editmodal<?php echo $item['id_user']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form action="<?= base_url('user/update/') . $item['id_user'];?>" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $item['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $item['password']; ?>">
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