<main>
  <section class="section section-lg pt-lg-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
              <div class="form-group">
              <h1 class="display-3">Class Detail</h1>
                <label for="nama">Class Name</label>
                    <div class="input-group input-group-alternative">
                      <input class="form-control" placeholder="Class Name" type="text" value="<?= $data['kelas']['nama']; ?>" disabled>
                    </div>
              </div>
              <div class="form-group">
                <label for="nama">Category</label>
                    <div class="input-group input-group-alternative">
                      <input class="form-control" placeholder="Class Name" type="text" value="<?= $data['kelas']['kategori']; ?>" disabled>
                    </div>
              </div>
              <div class="form-group">
                <label for="nama">Keterangan</label>
                <textarea class="form-control form-control-alternative" rows="8" placeholder="Not Added" disabled value=""><?= $data['kelas']['keterangan']; ?></textarea>
              </div>
          <a href="<?= BASEURL; ?>/kelas_settings" class="btn btn-dark">Kembali</a>
              <a href="<?= BASEURL; ?>/kelas_settings/hapus/<?= $data['kelas']['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">hapus</a>
              <a href="<?= BASEURL; ?>/kelas_settings/ubah/<?= $data['kelas']['id']; ?>" class="btn btn-info" data-toggle="modal" data-target="#formModal" data-id="<?= $kelas['id']; ?>">Ubah</a>
          </div>
          <div class="col-lg-6">
            <h1 class="display-3">Videos</h1>
            <ul class="list-group">
              <?php Flasher::flashVideo(); ?>
                    <?php foreach( $data['video'] as $video ) : ?>
                        <li class="list-group-item ">
                            <?= $video['judul']; ?>
                            <a href="<?= BASEURL; ?>/video/hapus/<?= $video['id']; ?>/<?= $data['kelas']['id'] ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah anda yakin?');">hapus</a>
                            <a href="<?= BASEURL; ?>/video/<?= $data['kelas']['id'] ?>/<?= $video['id']; ?>" class="badge badge-primary float-right">detail</a>
                        </li>
                    <?php endforeach; ?>
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModalVideo">
                      Add New Video
                    </button>
                </ul>
          </div>
        </div>
      </div>
    </section>
</main>

<!-- Modal Ubah -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Ubah Data kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/kelas_settings/ubah" method="post">
        <input type="hidden" name="id" id="id" value="<?= $data['kelas']['id'] ?>">
        <div class="form-group">
            	<label for="nama">Class Name</label>
                  <div class="input-group input-group-alternative">
                    <input class="form-control" placeholder="Class Name" name="nama" type="text" value="<?= $data['kelas']['nama']; ?>">
                  </div>
            </div>
            <div class="form-group">
            	<label for="nama">Category</label>
                  <div class="input-group input-group-alternative">
                    <input class="form-control" placeholder="Class Category" name="kategori" type="text" value="<?= $data['kelas']['kategori']; ?>">
                  </div>
            </div>
            <div class="form-group">
            	<label for="nama">Keterangan</label>
            	<textarea class="form-control form-control-alternative" rows="5" name="keterangan" placeholder="Not Added" value=""><?= $data['kelas']['keterangan']; ?></textarea>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Video -->
<div class="modal fade" id="formModalVideo" tabindex="-1" role="dialog" aria-labelledby="formModalVideo" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Add New Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/video/tambah" method="post" enctype="multipart/form-data">
        <input type="hidden" name="kelas" id="kelas" value="<?= $data['kelas']['id'] ?>">
        <div class="form-group">
              <label for="nama">Video Name</label>
                  <div class="input-group input-group-alternative">
                    <input class="form-control" name="judul" placeholder="Video Name" type="text" required>
                  </div>
            </div>
            <div class="form-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="video" name="video">
                    <label class="custom-file-label" for="customFile">Choose File</label>
                  </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Video</button>
        </form>
      </div>
    </div>
  </div>
</div>
