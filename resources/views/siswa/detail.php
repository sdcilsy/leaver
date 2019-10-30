<div class="container mt-5">
		
	<div class="card" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title"><?= $data['kelas']['nama']; ?></h5>
	    <h6 class="card-subtitle mb-2 text-muted"><?= $data['kelas']['kategori']; ?></h6>
	    <p class="card-text"><?= $data['kelas']['keterangan']; ?></p>
	    <a href="<?= BASEURL; ?>/kelas" class="card-link">Kembali</a>
	  </div>
	</div>

</div>