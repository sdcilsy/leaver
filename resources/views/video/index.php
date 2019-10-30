<main>
  <section class="section section-lg pt-lg-0 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
              <h1 class="display-3 text-center"><?= $data['kelas']['nama']; ?></h1>
              <h3 class="text-center mb-1"><?= $data['video']['judul']; ?></h3>
              <video id="myvideo" class="video-js vjs-default-skin vjs-big-play-centered mb-3" controls preload="auto" width="auto" height="400" poster="my_video_poster.png" data-setup="{}">
               <source src="<?= BASEURL; ?>/vid/<?= $data['video']['filename']; ?>" type='video/mp4'>
              </video>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-12 text-center">
            You Can Download This Video 
            <a href="<?= BASEURL; ?>/vid/<?= $data['video']['filename']; ?>"><button class="btn btn-neutral ml-2">Download</button></a>
          </div>
          <div class="col-lg-6 mt-3">
              <h1 class="display-3"><?= $data['kelas']['nama']; ?></h1>
              <div>
                  <span class="badge badge-pill badge-default"><?= $data['kelas']['kategori']; ?></span>
              </div>
              <p class="mt-3 text-justify"><?= $data['kelas']['keterangan']; ?></p>
              </div>
          <div class="col-lg-6 mt-3">
            <h1 class="display-3">Videos</h1>
            <ul class="list-group">
                    <?php foreach( $data['video_list'] as $video ) : ?>
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

<main>
	<section class="section section-lg">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-lg">	
          		
          </div>
        </div>
      </div>
    </section>
</main>