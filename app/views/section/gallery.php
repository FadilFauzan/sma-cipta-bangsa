<?php

require_once("../app/assets.php")

?>

<div style="background-color: #f8f9fa;">
    <div class="container text-center" id="gallery" style="padding: 120px 0 50px 0;">
        <h2 class="mb-3 fw-semibold">Galeri Siswa</h2><hr>
        <div class="row">
            <?php $aosDelay = 100; ?>
            <?php foreach ($gallery as $img) : ?>
                <div class="col-3 p-1">
                    <div data-aos="fade-in" data-aos-delay="<?= $aosDelay ?>" 
                        data-aos-duration="1000" data-aos-once="true">
                        <div class="card overflow-hidden shadow">
                            <img src="img/gallery/<?= $img ?>" alt="">
                        </div>
                    </div>
                </div>
                <?php $aosDelay += 100; ?>
            <?php endforeach ?>
        </div>
    </div>
</div>