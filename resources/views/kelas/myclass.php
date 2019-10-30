<main>
    
<div class="container mt-3">
    <div class="row">
        <div class="col-10">
            <?php Flasher::flashKelas(); ?>
            <h3 class="display-2">My Class</h3>
                <ul class="list-group">
                  <?php if ($data['kelas'] == NULL ): ?>
                    <button class="btn btn-outline-default">
                    Kamu tidak mengikuti kelas apapun
                    </button>
                  <?php endif ?>
                    <?php foreach( $data['kelas'] as $kelas ) : ?>
                        <li class="list-group-item ">
                            <?= $kelas['nama']; ?>
                            <a href="<?= BASEURL; ?>/kelas/hapus/<?= $kelas['id']; ?>/1" class="badge badge-danger float-right" onclick="return confirm('Apakah anda yakin?');">hapus</a>
                            <a href="<?= BASEURL; ?>/kelas/<?= $kelas['id']; ?>/1" class="badge badge-primary float-right">detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>

</div>
</main>
<section class="section section-lg">
</section>
