<!DOCTYPE html>
<html lang="en">
    <?php require "layout/head.php";?>

    <body>
        <div id="app">
            <?php require "layout/sidebar.php";?>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>
                <div class="page-heading">
                    <h3>Dashboard</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Sistem Penunjang Keputusan Menggunakan Metode SAW Untuk Perekrutan Dosen Baru Universitas Pamulang</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">
                                        Sistem Penunjang Keputusan (SPK) untuk Perekrutan Dosen Baru di Universitas Pamulang menggunakan metode 
                                        <em>Simple Additive Weighting (SAW)</em> untuk membantu proses seleksi dosen yang lebih objektif dan efisien. 
                                        Metode SAW merupakan salah satu teknik dalam pengambilan keputusan multikriteria yang digunakan untuk 
                                        memprioritaskan dan memilih alternatif terbaik berdasarkan berbagai kriteria yang telah ditentukan.
                                        <break>
                                        Dalam konteks perekrutan dosen, SPK dengan metode SAW bertujuan untuk menilai berbagai aspek kualifikasi 
                                        calon dosen secara sistematis dan transparan, sehingga keputusan yang diambil dapat lebih tepat dan sesuai 
                                        dengan kebutuhan akademik universitas.
                                        </p>
                                        <hr>
                                        <p class="card-text">
                                            Langkah Penyelesaian <em>Simple Additive Weighting</em> (SAW) adalah sebagai berikut
                                            :
                                        </p>
                                        <ol type="1">
                                            <li>Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan
                                                keputusan, yaitu <em>criteria</em>(Ci)</i>
                                            <li>Menentukan rating kecocokan setiap alternatif pada setiap kriteria (Xi).
                                            </li>
                                            <li>Membuat Matriks keputusan berdasarkan <em>criteria</em>(Ci), kemudian melakukan
                                                normalisasi Matriks berdasarkan persamaan yang disesuaikan dengan jenis
                                                atribut (atribut keuntungan(<em>Benefit</em>) ataupun atribut biaya(<em>Cost</em>)) sehingga diperoleh
                                                Matriks ternormalisasi(R).</li>
                                            <li>Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari
                                                perkalian Matriks ternormalisasi(R) dengan vektor bobot sehingga
                                                diperoleh nilai terbesar yang dipilih sebagai Alternatif terbaik
                                                (Ai)sebagai solusi</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <?php require "layout/footer.php";?>
            </div>
        </div>
        <?php require "layout/js.php";?>
    </body>

</html>