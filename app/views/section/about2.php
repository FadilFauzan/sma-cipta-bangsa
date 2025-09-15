<?php

require_once("../app/assets.php");

?>

<!-- Tentang Kami -->
<section class="about bg-body-secondary">
    <div class="container" id="about" style="padding: 120px 0 50px 0;">
        <h2 class="text-center mb-3 fw-bold">Tentang Kami</h2><hr>
        <div class="row">
            <div class="col p-0">
                <div class="card shadow overflow-hidden">
                    <img class="w-100" src="img/profile.jpg" alt="">
                </div>
            </div>
            <div class="col-9 p-0">
                <div class="card shadow mb-3 p-3">
                    <div class="card-body">
                        <h4>Selamat Datang di SMA Cipta Bangsa!</h4><br>
                        <p class="card-text" align="justify">
                            Kami dengan bangga menyambut Anda di halaman landing page resmi SMA Cipta Bangsa. Sebagai lembaga pendidikan yang berdedikasi, kami berkomitmen untuk memberikan pengalaman belajar yang unik dan membangun generasi muda yang berintegritas, berpengetahuan luas, dan siap menghadapi masa depan. <br><br>
                            Di SMA Cipta Bangsa, kami bukan hanya menyediakan kurikulum akademik yang berkualitas, tetapi juga menciptakan lingkungan belajar yang mendukung kreativitas, inovasi, dan pertumbuhan personal. Dengan dukungan staf pengajar yang berdedikasi dan fasilitas modern, kami membimbing siswa-siswa kami melalui perjalanan pendidikan yang memicu minat dan mengasah bakat mereka.
                            Kami percaya bahwa pendidikan adalah kunci menuju kesuksesan, dan di SMA Cipta Bangsa, kami memberikan lebih dari sekadar pelajaran. Kami membentuk karakter, merawat semangat kebersamaan, dan merangsang keinginan untuk selalu belajar. <br><br>
                            Bergabunglah dengan komunitas kami di SMA Cipta Bangsa dan mari bersama-sama membina masa depan cerah bagi para generasi penerus. Terima kasih telah meluangkan waktu untuk mengenal kami lebih dekat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visi dan Misi -->
<section class="bg-secondary text-white">
    <div class="container" style="padding: 50px 0;">
        <div class="row">
            <h2 class="text-center mb-3 fw-bold">Visi dan Misi</h1><hr>
            <div class="col-6 mb-3 mb-0">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center fw-semibold">Visi</h3><hr>
                        <ul>
                            <li><b>Menciptakan Pemimpin Masa Depan:</b> Menjadi lembaga pendidikan yang mempersiapkan siswa menjadi pemimpin tangguh, berwawasan global, dan bertanggung jawab.</li>
                            <li><b>Menginspirasi Kreativitas dan Inovasi:</b> Mengembangkan lingkungan belajar yang merangsang kreativitas, inovasi, dan pemikiran kritis untuk memecahkan tantangan masa depan.</li>
                            <li><b>Membangun Karakter dan Etika:</b> Menanamkan nilai-nilai moral, etika, dan integritas dalam setiap siswa, membentuk pribadi yang berkepribadian baik dan berempati.</li>
                            <li><b>Memfasilitasi Pengembangan Holistik:</b> Memberikan pendidikan yang holistik dengan pendekatan yang seimbang antara akademik, seni, olahraga, dan pengembangan kepribadian.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center fw-semibold">Misi</h3><hr>
                        <ul>
                            <li><b>Memberikan Kurikulum Berkualitas:</b> Menyajikan kurikulum yang berfokus pada keunggulan akademik, mengikuti perkembangan terkini, dan mempersiapkan siswa untuk menghadapi tantangan dunia global.</li>
                            <li><b>Fasilitas Modern dan Inovatif:</b> Menyediakan fasilitas modern dan inovatif untuk menciptakan lingkungan belajar yang nyaman, aman, dan mendukung perkembangan kreativitas siswa.</li>
                            <li><b>Pendidikan Karakter Berbasis Pengalaman:</b> Mengintegrasikan pembelajaran akademik dengan pengalaman kehidupan nyata, membantu siswa mengembangkan kepemimpinan, kerjasama, dan keterampilan interpersonal.</li>
                            <li><b>Dukungan Kepribadian dan Karir:</b> Memberikan bimbingan serta dukungan dalam pengembangan karir dan kepribadian siswa, membantu mereka mengidentifikasi minat dan bakat serta merencanakan masa depan yang sukses.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fasilitas Sekolah -->
<section class="bg-white">
    <div class="container text-center" style="padding: 70px 0 50px 0;">
        <h2 class="mb-3 fw-semibold">Fasilitas Sekolah</h2><hr>
        <div class="row">
            <?php $fasilitasImgDelay = 150 ?>
            <?php foreach ($fasilitas["img"] as $index => $img) : ?>
                <div class="col-4 p-1">
                    <div data-aos="fade-out" data-aos-delay="<?= $fasilitasImgDelay ?>" 
                        data-aos-duration="1000" data-aos-once="true">

                        <div class="card overflow-hidden shadow">
                            <p class="position-absolute px-3 py-2 text-white fs-5 rounded" style="background-color: rgba(0, 0, 0, 0.7)">
                                <?= $fasilitas["list"][$index] ?>
                            </p>
                            <img src="img/fasilitas/<?= $img ?>" alt="">
                        </div>

                    </div>
                </div>
                <?php $fasilitasImgDelay += 50 ?>
            <?php endforeach ?>
        </div>
    </div>
</section>
