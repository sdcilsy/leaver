<main>
	<section class="section section-lg">
		<div class="container">
			<div class="row">
				<div class="col-lg bg-secondary p-5">
					<h1 class="display-3">Create New Class</h1>
					<?php Flasher::flashAuth(); ?>
					<form method="post" action="<?= BASEURL; ?>/kelas/tambahaksi">
					  <div class="row">
					    <div class="col">
					      <div class="form-group">
					      	<label for="nama">Class Name</label>
					        <input type="text" class="form-control form-control-alternative" id="nama" placeholder="Nama Kelas" required>
					      </div>
					      <div class="form-group">
					      	<label for="kategori">Category Name</label>
					        <input type="text" class="form-control form-control-alternative" id="kategori" placeholder="Nama Kelas" required>
					      </div>
					      <div class="form-group">
					      	<label for="keterangan">Keterangan Kelas</label>
  							<textarea class="form-control form-control-alternative" id="keterangan" rows="5" placeholder="Write Class blablabla Here ......."></textarea>
					      </div>
					    </div>
					  </div>
					 <button class="btn btn-neutral mt-2">Create Class</button>
					</form>
				</div>
				
			</div>
		</div>
	</section>
</main>
