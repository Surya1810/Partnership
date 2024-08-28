@extends('frontend.layout.app')

@section('title')
    SecureTags
@endsection

@push('css')
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>SecureTags</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
        <div class="position-relative overflow-hidden p-3 text-center">
            <div class="col-md-5 mx-auto my-5">
                <img src="{{ asset('assets/img/K9/img(2).jpg') }}" alt="logo">
                <p class="lead fw-normal">Solusi inovatif untuk manajemen dokumen berbasis teknologi RFID,
                    dirancang untuk membantu organisasi mengelola, melacak, dan mengamankan dokumen dengan efisiensi
                    yang belum pernah ada sebelumnya.
                </p>
            </div>
        </div>

        <div id="myCarousel" class="carousel mt-3 slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Teknologi Tinggi</h1>
                            <p>Kacamata anjing & kuda berteknologi tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Military Grade</h1>
                            <p>Dirancang dengan fitur dan ketahanan yang baik.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Beragam Fungsi</h1>
                            <p>Banyak fungsi yang tertanam pada kacamata K9 Vision.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container py-3 marketing">

            <!-- START THE FEATURETTES -->
            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    <h2 class="featurette-heading"><b>SecureTags</b></h2>
                    <p class="fs-5">SecureTags memanfaatkan teknologi RFID (Radio Frequency Identification) untuk
                        mengotomatiskan proses
                        manajemen dokumen. Setiap dokumen diberi tag RFID yang mengandung informasi unik. Sistem ini
                        memungkinkan pengguna untuk memindai dokumen secara massal tanpa harus membuka dan memeriksa setiap
                        dokumen secara manual, menghemat waktu dan mengurangi risiko kesalahan manusia. SecureTags sangat
                        cocok untuk lingkungan kerja di mana keamanan dan akurasi dokumen sangat kritis, seperti di sektor
                        perbankan, hukum, kesehatan, dan pemerintahan.</p>

                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/K9/img(1).jpg') }}" alt="Ruff"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Fitur utama <b>SecureTags</b></h2>
                    <ul class="fs-5">
                        <li><b>Pelacakan Real-Time</b> <br>SecureTags memungkinkan Anda melacak lokasi setiap dokumen secara
                            real-time. Dengan satu klik, Anda dapat mengetahui posisi terakhir dokumen di dalam kantor Anda,
                            mengurangi risiko kehilangan atau salah penempatan.</li>
                        <li><b>Otomatisasi Inventaris Dokumen</b><br>Sistem ini otomatis mencatat setiap kali dokumen
                            dipindahkan, diakses, atau diubah. Laporan inventaris dapat dihasilkan secara berkala untuk
                            memastikan semua dokumen berada di tempat yang seharusnya.</li>
                        <li><b>Keamanan Berlapis</b><br>Setiap tag RFID dilengkapi dengan enkripsi data yang kuat,
                            memastikan bahwa informasi sensitif tetap aman dari akses yang tidak sah.</li>
                        <li><b>Integrasi Mudah</b><br>SecureTags dapat diintegrasikan dengan sistem manajemen dokumen atau
                            ERP yang sudah ada, membuat transisi dan adopsi sistem ini menjadi lebih mulus.</li>
                        <li><b>Pengelolaan Akses</b><br>Sistem ini memungkinkan pengaturan hak akses berbeda untuk berbagai
                            pengguna, memastikan hanya personel yang berwenang yang dapat mengakses dokumen tertentu.</li>
                        <li><b>Pelaporan dan Analitik</b><br>SecureTags menyediakan fitur pelaporan dan analitik yang kuat,
                            memungkinkan manajemen untuk memantau penggunaan dokumen, audit akses, dan analisis kinerja
                            manajemen dokumen.</li>
                    </ul>

                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ asset('assets/img/K9/img(19).jpg') }}" alt="Ruff"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Fungsi <b>SecureTags</b></h2>
                    <ul class="fs-5">
                        <li><b>Meningkatkan Efisiensi Operasional</b><br>Dengan otomatisasi dan pelacakan real-time,
                            SecureTags membantu mengurangi waktu yang dihabiskan untuk mencari dokumen, memungkinkan
                            karyawan fokus pada tugas yang lebih penting.</li>
                        <li><b>Mengurangi Risiko Kehilangan Dokumen</b><br>Pelacakan dan pengelolaan inventaris yang canggih
                            memastikan bahwa dokumen penting tidak pernah hilang atau salah tempat.</li>
                        <li><b>Meningkatkan Keamanan Data</b><br>Dengan enkripsi dan pengelolaan akses yang ketat,
                            SecureTags menjaga dokumen sensitif tetap aman dari ancaman internal maupun eksternal.</li>
                        <li><b>Menyederhanakan Kepatuhan</b><br>Sistem ini membantu organisasi mematuhi regulasi terkait
                            manajemen dan keamanan dokumen, dengan menyediakan audit trail yang lengkap dan mudah diakses.
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/img/K9/img(21).jpg') }}" alt="Ruff"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
