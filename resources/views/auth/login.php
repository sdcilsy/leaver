<!-- MAIN -->
<div class="container">
    <div class="row">
        <div class="col-lg">
            <div class="card-body px-lg-5 py-lg-5">
                    <h1 class="text-white mt-4">LEHO LOGIN</h1>
                  <?php Flasher::flashAuth(); ?>
                <form role="form" action="<?= BASEURL; ?>/auth/loginAkun" method="post">
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Email" type="text" name="username" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                      </div>
                      <input class="form-control" placeholder="Password" type="password" name="password" required>
                    </div>
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span class="text-white">Remember me</span>
                    </label>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-neutral my-4">Login</button>
                  </div>
                </form>
              </div>
        </div>
        <div class="col-lg">
            <div class="jumbotron mt-4 bg-transparent text-white">
                <h2 class="display-5 text-white">Daftar dan Login</h2>
                <p>Belum punya akun?</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a href="<?= BASEURL; ?>/auth/registrasi"><button type="submit" class="btn btn-outline-primary">Sign Up</button></a>
            </div>
        </div>
        
    </div>
    
</div>
<!-- MAIN -->
