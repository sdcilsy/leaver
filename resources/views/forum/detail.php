<main>
  <section class="section section-lg bg-gradient-default">
      <div class="container pt-lg pb-300">
        <div class="row text-center justify-content-center">
          <div class="col-lg-10">
            <h2 class="display-3 text-white">Pertanyaan Dari : <?= $data['forum']['username'] ?></h2>
            <p class="lead text-white"><?= $data['forum']['pertanyaan'] ?></p>
          </div>
        </div>
        <div class="row mt-5">
          <?php foreach( $data['jawaban'] as $jawaban ) : ?>
            <div class="col-lg-10">
              <div class="card shadow shadow-lg--hover mt-1">
                <div class="card-body">
                  <div class=" px-3">
                    <div class="pl-4">
                      <h5 class="title">Reply From : <span class="text-success"><?= $jawaban['username']; ?></span></h5>
                      <p><?= $jawaban['jawaban']; ?></p>
                    </div>
                    <?php if ($_SESSION['login']['username'] == $jawaban['username']): ?>
                      <a href="<?= BASEURL ?>/forum/hapusjawaban/<?= $jawaban['id'] ?>/<?= $data['forum']['id'] ?>">
                        <div class="icon icon-shape bg-gradient-danger rounded-circle text-white">
                          <i class="ni ni-satisfied"></i>
                        </div>
                        <span class="text-danger">Hapus</span>
                      </a>
                    <?php endif ?>
                  </div>
                </div>
              </div>           
            </div>
            <?php endforeach; ?>
            
        </div>
        <?php if ($data['jawaban'] == NULL): ?>
            <div class="card shadow shadow-lg--hover">
              <div class="card-body">
                <div class="d-flex">
                  <div class="pl-4">
                    <h5 class="title">Belum Ada Yang Menjawab</h5>
                  </div>
                </div>
              </div>
            </div>
        <?php endif; ?>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
    <section class="section section-lg pt-lg-0 section-contact-us">
      <div class="container">
        <div class="row justify-content-center mt--300">
          <div class="col-lg-8">
            <div class="card bg-gradient-secondary shadow">
              <div class="card-body p-lg-5">
                <h4 class="mb-1">Ayo Bantu <?= $data['forum']['username'] ?></h4>
                <p class="mt-0">Jawabanmu pasti akan sangat membantu</p>
                <form action="<?= BASEURL ?>/forum/jawab" method="post">
                  <input type="hidden" name="username" value="<?= $_SESSION['login']['username']; ?>">
                  <input type="hidden" name="forumid" value="<?= $data['forum']['id']; ?>">
                  <div class="form-group mb-4">
                    <textarea class="form-control form-control-alternative" name="jawaban" rows="4" cols="80" placeholder="Tuliskan bantuanmu..."></textarea>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-default btn-round btn-block btn-lg">Kirim Pesan</button>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
