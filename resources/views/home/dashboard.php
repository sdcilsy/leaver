<main>
	<section class="section bg-gradient-info">
    <div class="container">
			<h1 class="display-2 text-white text-center">LEARN SOMETHING NEW IN HERE</h1>
        <div class="row row-grid justify-content-center">
	        <div class="col-lg-6 mt-2">
	        <form action="<?= BASEURL; ?>/home/cari" method="post">
	          <div class="input-group mb-3">
	            <input type="text" class="form-control" placeholder="Cari Kelas / kategori" name="keyword" id="keyword" autocomplete="off">
	            <div class="input-group-append">
	              <button class="btn btn-info" type="submit" id="tombolCari">Cari</button>
	            </div>
	          </div>
	        </form>
		    </div>
		</div>
		<div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="row row-grid">
            <?php foreach( $data['kelas'] as $kelas ) : ?>
              <div class="col-lg-6 mt-4">
                <div class="card card-lift shadow border-0" style="height: 300px;">
                    <div class="card-body py-5">
                      <h6 class="text-default text-uppercase"><?= $kelas['nama']; ?></h6>
                      <p class="description mt-3"><?= Flasher::limit_words($kelas['keterangan'], 10) ?>.....</p>
                      <div>
                        <span class="badge badge-pill badge-default mt-3"><?= $kelas['kategori']; ?></span>
                      </div>
                      <a href="<?= BASEURL; ?>/kelas/<?= $kelas['id']; ?>" class="btn btn-default mt-2">Learn more</a>
                    </div>
                </div>
              </div>
            <?php endforeach; ?>

            </div>
            <?php if ($data['kelas'] == NULL): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <span class="alert-inner--text">
                    <strong>Kelas Yang Anda Cari Tidak Ada</strong>
                  </span>
                </div>
              <?php endif ?>
          </div>
          <div class="col-lg-4 mt-4">
            <div class="card card-lift shadow border-0">
                    <div class="card-body py-5">
                      <h6 class="text-default text-uppercase">Apa yang baru?</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
          </div>
    </div>
  <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
  </section>
  <section class="section section-lg">
      <div class="container">
        <div class="row justify-content-center text-center mb-lg">
          <div class="col-lg-8">
            <h2 class="display-3">Let's Help Our Friends!</h2>
            <p class="lead text-muted">Answere they question in forum menu learning in home, every question's answered will very help.</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-3 mb-lg-0">
            <div class="px-4">
              <img src="<?= BASEURL; ?>/img/profile-default.png" class="rounded-circle img-center img-fluid shadow shadow-lg--hover" style="width: 200px;">
              <div class="pt-4 text-center">
                <h5 class="title">
                  <span class="d-block mb-1">BAH</span>
                  <small class="h6 text-muted">Every Question Will Answere by BAH</small>
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>