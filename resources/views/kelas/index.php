<main>
  <section class="section section-lg pt-lg-0 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
              <h1 class="display-3"><?= $data['kelas']['nama']; ?></h1>
              <div>
                  <span class="badge badge-pill badge-default"><?= $data['kelas']['kategori']; ?></span>
              </div>
              <p class="mt-3 text-justify"><?= $data['kelas']['keterangan']; ?></p>
                <a href="<?= BASEURL; ?>" class="btn btn-dark">Kembali</a>
                <?php if ($data['myclass'] == NULL): ?>
                  <a href="<?= BASEURL; ?>/kelas/tambah/<?= $data['kelas']['id']; ?>" class="btn btn-info">Add to My Class</a>
                <?php else: ?>
                  <a href="<?= BASEURL; ?>/kelas/hapus/<?= $data['kelas']['id']; ?>" class="btn btn-danger">Remove From My Class</a>
                <?php endif ?>
              </div>
          <div class="col-lg-6">
            <h1 class="display-3">Videos</h1>
            <ul class="list-group">
                    <?php foreach( $data['video'] as $video ) : ?>
                        <li class="list-group-item ">
                            <?= $video['judul']; ?>
                            <a href="<?= BASEURL; ?>/video/<?= $data['kelas']['id'] ?>/<?= $video['id']; ?>" class="badge badge-primary float-right">
                            Lihat</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
          </div>
        </div>
      </div>
    </section>
</main>
