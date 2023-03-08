<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-6">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">
                <br><img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-responsive"
							alt="responsive image" width="300">
                  <h1 class="h4 text-gray-900 mb-4">Login Aplikasi Pengaduan Masyarakat</h1>
                  <br>
        
                </div>

                <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>') ?>

                <?= $this->session->flashdata('msg'); ?>

                <?= form_open('Auth/LoginController', 'class="user"'); ?>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" autofocus value="<?= set_value('username') ?>">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                </form>
                <hr>
                <div class="text-center">   
                    <!-- <p>CEKZYYY</p> -->
                  <a class="small" href="<?= base_url('Auth/RegisterController') ?>">Daftar Pengaduan?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>