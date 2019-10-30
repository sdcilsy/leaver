<!-- MAIN -->
<div class="container">    
    <div class="row">
        <div class="col-lg-6">
        </div>
    </div>
    <div class="row">
        <div class="col-lg">
            <div class="jumbotron bg-transparent text-white">
                <h1 class="display-5 text-white">Create Account</h1>
                <p>Isi form dibawah sesuai informasi diri anda</p>
                <hr class="my-4">
                <?php Flasher::flashAuth(); ?>
                <form action="<?= BASEURL; ?>/auth/registrasiakun" method="post">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                          </div>
                          <input class="form-control" placeholder="Username" type="text" name="username" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                          </div>
                          <input class="form-control" placeholder="Email" type="email" name="email" required>
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
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control" placeholder="Verify Password" type="password" name="password2" required>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-neutral mt-3">Create Account</button>
                </form>
            </div>
        </div>
        <div class="col-lg">
        <div class="jumbotron bg-transparent text-white">
                <h1 class="display-5 text-white">Daftar dan Login</h1>
                <p>Sudah punya akun?</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a href="<?= BASEURL; ?>/auth/login"><button type="submit" class="btn btn-outline-primary">Login</button></a>
        </div>
    </div>
    
</div>
<!-- MAIN -->