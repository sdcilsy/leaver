<main>
 <section class="section pb-0 bg-gradient-warning">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-md-6 order-lg-2 ml-lg-auto">
            <div class="position-relative pl-md-5">
              <img src="../assets/img/ill/ill-2.svg" class="img-center img-fluid">
            </div>
          </div>
          <div class="col-lg-8 order-lg-1">
            <div class="d-flex px-3">
              <div>
                <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                  <i class="ni ni-building text-primary"></i>
                </div>
              </div>
              <div class="pl-4">
                <h4 class="display-3 text-white">LEHO Forum</h4>
                <p class="text-white">Ask your question in here</p>
                <button type="button" class="btn btn-neutral mb-3 tombolTambahData" data-toggle="modal" data-target="#formModal">
                    Tanyakan Pertanyaanmu
                </button>
              </div>
                
            </div>
              <form action="<?= BASEURL; ?>/forum/cari" method="post">
                  <div class="input-group mb-3 mt-2">
                    <div class="input-group-append">
                      <button class="btn btn-neutral" type="submit" id="tombolCari">Cari</button>
                    </div>
                    <input type="text" class="form-control" placeholder="  Cari Forum" name="keyword" id="keyword" autocomplete="off">
                  </div>
                </form>
            <?php foreach( $data['forum'] as $forum ) : ?>
            <div class="card shadow shadow-lg--hover mt-5">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-default"><?= $forum['username']; ?></h5>
                    <p><?= $forum['pertanyaan']; ?></p>
                    <a href="<?= BASEURL ?>/forum/detail/<?= $forum['id'] ?>" class="text-success">Lihat</a>
                  </div>
                </div>
                    <?php if ($_SESSION['login']['username'] == $forum['username']): ?>
                      <a href="<?= BASEURL ?>/forum/hapusjawaban/<?= $jawaban['id'] ?>/<?= $data['forum']['id'] ?>">
                        <span class="text-danger" style="margin-left: 90%;">Hapus</span>
                      </a>
                    <?php endif ?>
              </div>
            </div>           
            <?php endforeach; ?>
            <?php if ($data['forum'] == NULL): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <span class="alert-inner--text">
                    <strong>Kelas Yang Anda Cari Tidak Ada <a href="<?= BASEURL; ?>/forum" class="text-dark">Kembali??</a></strong>
                  </span>
                </div>
              <?php endif ?>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tanyakan Pertanyaanmu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/forum/tambah" method="post">
        <div class="form-group">
            <label for="pertanyaan">Pertanyaan</label>
            <textarea class="form-control form-control-alternative" rows="5" placeholder="Tuliskan Pertanyaanmu disini" name="pertanyaan" required></textarea>
        </div>
        <input type="hidden" name="username" value="<?= $_SESSION['login']['username'] ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Buat Pertanyaan</button>
        </form>
      </div>
    </div>
  </div>
</div> 
</main>
