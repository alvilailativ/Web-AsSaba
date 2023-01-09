  <main class="main-content position-relative border-radius-lg ">
      <center><h2 class="font-weight-bolder text-white mb-5 mt-9">
        <font size="50">Welcome Admin Dashboard</font></h2>
        <a  href="<?= base_url('logout');?>" class="btn btn-secondary d-grid gap-1 py-3 px-2 col-sm-2">Logout</a></center>
  </main>
  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-2 font-weight">View</p>
                    <h5 class="font-weight-bolder mt-3">
                    <a href="<?= base_url('user');?>" class="btn btn-primary">User</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-2 font-weight">View</p>
                    <h5 class="font-weight-bolder mt-3">
                    <a href="<?= base_url('produk');?>" class="btn btn-primary">Produk</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-2 font-weight">View</p>
                    <h5 class="font-weight-bolder mt-3">
                    <a href="<?= base_url('galeri');?>" class="btn btn-primary">Galery</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-2 font-weight-bold">View</p>
                    <h5 class="font-weight-bolder mt-3">
                    <a href="<?= base_url('chatbots');?>" class="btn btn-primary">Chatbot</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  