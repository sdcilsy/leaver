<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
          <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Siswa
          </button>
      </div>
    </div>
    
    <div class="row">
        <div class="col-6">
        <form action="<?= BASEURL; ?>/siswa/cari" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Siswa" name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button" id="tombolCari">Cari</button>
            </div>
          </div>
        </form>
            <h3 class="mt-2">Daftar Siswa</h3>
                <ul class="list-group">
                    <?php foreach( $data['siswa'] as $siswa ) : ?>
                        <li class="list-group-item ">
                            <?= $siswa['nama']; ?>
                            <a href="<?= BASEURL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah anda yakin?');">hapus</a>
                            <a href="<?= BASEURL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $siswa['id']; ?>">ubah</a>
                            <a href="<?= BASEURL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="badge badge-primary float-right">detail</a>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/siswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="Teknik Jaringan">Teknik Jaringan</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Marketing">Teknik Marketing</option>
            <option value="Teknik Penambangan">Teknik Penambangan</option>
            </select>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>