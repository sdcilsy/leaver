<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
          <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-toggle="modal" data-target="#formModal">
            Create New Class
          </button>
      </div>
    </div>
    <div class="row">
        <div class="col-10">
        <form action="<?= BASEURL; ?>/kelas/cari" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari kelas" name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
            <?php Flasher::flashKelas(); ?>
            <h3 class="mt-2">Daftar Kelas</h3>
                <ul class="list-group">
                  <?php if ($data['kelas'] == NULL ): ?>
                    <button class="btn btn-outline-default">
                    Class Has Empty
                    </button>
                  <?php endif ?>
                    <?php foreach( $data['kelas'] as $kelas ) : ?>
                        <li class="list-group-item ">
                            <?= $kelas['nama']; ?>
                            <a href="<?= BASEURL; ?>/kelas_settings/hapus/<?= $kelas['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah anda yakin?');">hapus</a>
                            <a href="<?= BASEURL; ?>/kelas_settings/detail/<?= $kelas['id']; ?>" class="badge badge-primary float-right">detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/kelas_settings/tambah" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control form-control-alternative" placeholder="Class Name" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control form-control-alternative" placeholder="Class Category" id="kategori" name="kategori" required>
        </div>
        
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control form-control-alternative" rows="5" placeholder="Keterangan Kelas" name="keterangan" required></textarea>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create Class</button>
        </form>
      </div>
    </div>
  </div>
</div>