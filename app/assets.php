<?php 

$fasilitas = [
    "img" => [
        "lapangan.jpg",
        "ruang-kelas.png",
        "kantin.jpg",
        "lab-komputer.jpg",
        "lab-IPA.jpg",
        "perpustakaan.jpg"
    ],
    "list" => [
        "Lapangan",
        "Ruang Kelas",
        "Kantin",
        "Lab Komputer",
        "Lab IPA",
        "Perpustakaan"
    ]
];

$jurusan = [
    "img" => [
        "ips.jpg",
        "mipa.webp",
        "bahasa.png"
    ],
    "list" => [
        "IPS",
        "MIPA",
        "Bahasa"
    ]
];

function getJurusanDescription($jurusanName)
{
    switch ($jurusanName) {
        case 'MIPA':
            return "Matematika dan Ilmu Pengetahuan Alam (MIPA): Fokus pada matematika dan ilmu pengetahuan alam, mengembangkan keterampilan analitis dan pemecahan masalah.";
        case 'IPS':
            return "Ilmu Pengetahuan Sosial (IPS): Studi ilmu sosial seperti sejarah, ekonomi, dan sosiologi, untuk memahami dinamika sosial dan perkembangan masyarakat.";
        case 'Bahasa':
            return "Bahasa: Pilihan pembelajaran bahasa dan sastra, mengasah keterampilan berbahasa, membaca, menulis, dan memahami karya sastra.";
        default:
            return "Deskripsi tidak tersedia.";
    }
}

$gallery = [
    "model-pembelajaran-debat.jpg",
    "paskibra.jpg",
    "olimpiade.jpeg",
    "pramuka.jpg",
    "lab-komputer.png",
    "upacara.JPG",
    "diskusi-kelompok.jpg",
    "basket.jpg"
];