@extends('frontend.layout.app')

@section('title')
    About Us
@endsection

@push('css')
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>Tentang kami</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top" style="min-height: 70svh;background-color: #fff">
        {{-- <section id="our-company">
            <div class="container-lg my-lg-5 my-3">
                <div class="row px-lg-5 px-3 py-3 py-sm-2">
                    <div class="col-sm-12 col-lg-3">
                        <h2 class="fs-2 text-navy fw-600">
                            Info Perusahaan </h2>
                    </div>
                    <div class="col-sm-12 col-lg-8 fs-5 fw-light lh-base">

                        <p>Seiring berkembangnya teknologi dan munculnya generasi <em>digital-savvy</em> di Indonesia,
                            secara bertahap ekosistem digital terbentuk dengan semakin matang di negeri ini. Di tengah
                            dinamika inilah Bank Jago lahir dan bertumbuh.</p>
                        <p>Dirancang khusus sebagai bank berbasis teknologi (<em>tech-based bank</em>) yang tertanam di
                            dalam ekosistem digital Indonesia, Bank Jago memiliki aspirasi untuk meningkatkan kesempatan
                            tumbuh berjuta insan melalui solusi finansial digital yang berfokus pada kehidupan.</p>
                        <p>Bank Jago membangun produk dan layanan perbankan, baik secara konvensional maupun syariah, yang
                            dapat dinikmati seluruh lapisan masyarakat, mulai dari ritel (<em>consumer</em>), <em>mass
                                market</em>, sampai usaha mikro, kecil, dan menengah (UMKM). Semangat inklusi ini memacu
                            Bank Jago untuk terus berinovasi dan berkolaborasi dengan para pelaku ekonomi digital.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="aspiration" class="py-lg-5 py-4" style="background-color: #0B0B45">
            <div class="container text-white">
                <div class="row px-lg-5 px-3 py-3 py-sm-2">
                    <h2 class="fs-2 fw-600" style="color: #0055ff">
                        Aspirasi </h2>
                    <h3 class="fw-light fs-1 mb-5">
                        ”Meningkatkan kesempatan <strong class="fw-700">tumbuh</strong> berjuta insan melalui solusi
                        finansial digital yang <strong class="fw-700">berfokus pada kehidupan</strong>” </h3>
                </div>
            </div>
        </section>
        <section id="journey" class="py-lg-5 py-1">
            <div class="container px-lg-5 px-4">
                <div class="row ">
                    <div class="col-sm-12 col-lg-3 pb-lg-0 pb-4 ">
                        <h3 class="fs-4 text-navy fw-600 mb-3">
                            Perjalanan </h3>
                    </div>
                    <div class="offset-lg-1 col-sm-12 col-lg-7">
                        <ul class="timeline">
                            <li class="timeline-item timeline-collapse  " data-year="2023">

                                <p class="text-grey lh-base">
                                    Bank Jago meluncurkan Jago Digital Academy sebagai wadah kolaboratif bagi para tech
                                    talents dalam mengakselerasi pengetahuan dan kompetensi digital.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="">

                                <p class="text-grey lh-base">
                                    GoTo Financial dan Bank Jago resmi meluncurkan layanan GoPay Tabungan by Jago, rekening
                                    untuk transaksi sehari-hari yang bisa diakses melalui aplikasi GoPay atau Gojek.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="2022">

                                <p class="text-grey lh-base">
                                    Bank Jago meluncurkan Aplikasi Jago Syariah (Jago Syariah App).
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="">

                                <p class="text-grey lh-base">
                                    Bank Jago melakukan integrasi Aplikasi Jago dengan aplikasi untuk mitra usaha GoFood,
                                    yaitu Aplikasi GoBiz, yang merupakan bagian dari Grup GoTo.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="2021">

                                <p class="text-grey lh-base">
                                    Bank Jago melakukan Penawaran Umum Terbatas II (Rights Issue). Modal Bank Jago meningkat
                                    menjadi Rp 8,11 triliun.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="">

                                <p class="text-grey lh-base">
                                    GIC Private Limited menjadi investor Bank Jago (pemegang saham non pengendali)
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="">

                                <p class="text-grey lh-base">
                                    Bank Jago meluncurkan aplikasi digital yang berfokus pada kehidupan untuk pengelolaan
                                    keuangan menjadi lebih simple, kolaboratif, dan inovatif.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="">

                                <p class="text-grey lh-base">
                                    Bank Jago menjalin kemitraan strategis dengan APERD online, PT Bibit Tumbuh Bersama
                                    (Bibit).
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="">

                                <p class="text-grey lh-base">
                                    Jago dan Gojek umumkan kerjasama tahap pertama. Kantong Jago menjadi salah satu metode
                                    pembayaran non tunai di aplikasi Gojek.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="">

                                <p class="text-grey lh-base">
                                    Bank Jago meresmikan Unit Usaha Syariah untuk melayani segmen mass market berdasarkan
                                    prinsip syariah.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="2020">

                                <p class="text-grey lh-base">
                                    Perubahan logo dan nama dari PT Bank Artos Indonesia Tbk menjadi PT Bank Jago Tbk.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="">

                                <p class="text-grey lh-base">
                                    Bank Jago melakukan Penawaran Umum Terbatas I (Rights Issue). Modal inti bank menjadi
                                    Rp1,3 triliun.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="">

                                <p class="text-grey lh-base">
                                    Gojek melalui PT Dompet Karya Anak Bangsa (GoPay) menjadi investor strategis non
                                    pengendali dengan porsi kepemilikan 22,16%.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="2019">

                                <p class="text-grey lh-base">
                                    PT Metamorfosis Ekosistem Indonesia (MEI) dan Wealth Track Technology Limited (WTT)
                                    melakukan akuisisi saham PT Bank Artos Indonesia Tbk dengan total kepemilikan sebesar
                                    51%.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  " data-year="2016">

                                <p class="text-grey lh-base">
                                    PT Bank Artos Indonesia Tbk resmi menjadi perusahaan publik setelah menawarkan saham
                                    perdana kepada masyarakat dan mencatatkan sahamnya di Bursa Efek Indonesia (BEI) dengan
                                    kode emiten ARTO.
                                </p>
                            </li>
                            <li class="timeline-item timeline-collapse  mb-0  " data-year="1992">

                                <p class="text-grey lh-base">
                                    PT Bank Artos Indonesia Tbk berdiri di Bandung, menawarkan produk simpanan dan pinjaman
                                    serta layanan transaksi perbankan.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="management" class="">
            <div class="container px-lg-5 px-4 py-lg-5 py-3">
                <div class="row ">
                    <div class="col-sm-12 col-lg-4">
                        <h3 class="fs-4 text-navy fw-600 mb-3">
                            Manajemen </h3>
                        <div class="nav nav-pills me-lg-3 mb-sm-5" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <div class="w-100">
                                <button class="nav-link active" id="v-boc" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-boc" type="button" role="tab"
                                    aria-controls="v-pills-boc" aria-selected="true">Profil Dewan Komisaris
                                </button>
                            </div>
                            <div class="w-100">
                                <button class="nav-link" id="v-bod" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-bod" type="button" role="tab"
                                    aria-controls="v-pills-bod" aria-selected="false" tabindex="-1">Profil Direksi
                                </button>
                            </div>
                            <div class="w-100">
                                <button class="nav-link" id="v-kdps" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-kdps" type="button" role="tab"
                                    aria-controls="v-pills-kdps" aria-selected="false" tabindex="-1">Ketua Dewan
                                    Pengawas Syariah
                                </button>
                            </div>
                            <div class="w-100">
                                <button class="nav-link" id="v-adps" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-adps" type="button" role="tab"
                                    aria-controls="v-pills-adps" aria-selected="false" tabindex="-1">Anggota Dewan
                                    Pengawas Syariah
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade active show" id="v-pills-boc" role="tabpanel"
                                aria-labelledby="v-boc">
                                <div class="row justify-content-between">
                                    <div class="col-sm-12 col-lg-5 px-3 pb-lg-0 pb-4">
                                        <a class="show-modal" data-type="boc" data-name="jerry-ng">
                                            <img src="https://assets.jago.com/web-assets/public/boc-jerry-ng.png"
                                                class="img-fluid w-100" alt="Jerry Ng">
                                            <div class="text-center">
                                                <p class="lead fw-600 mb-lg-2 mb-0">
                                                    Jerry Ng
                                                </p>
                                                <p class="text-grey t-job lh-base">Komisaris Utama</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-lg-5 px-3 pb-lg-0 pb-4">
                                        <a class="show-modal" data-type="boc" data-name="anika-faisal">
                                            <img src="https://assets.jago.com/web-assets/public/boc-anika-faisal.png"
                                                class="img-fluid w-100" alt="Anika Faisal">
                                            <div class="text-center">
                                                <p class="lead fw-600 mb-lg-2 mb-0">
                                                    Anika Faisal
                                                </p>
                                                <p class="text-grey t-job lh-base">Komisaris</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-lg-5 px-3 pb-lg-0 pb-4">
                                        <a class="show-modal" data-type="boc" data-name="arief-surowidjojo">
                                            <img src="https://assets.jago.com/web-assets/public/boc-arief-surowidjojo.png"
                                                class="img-fluid w-100" alt="Arief Tarunakarya Surowidjojo">
                                            <div class="text-center">
                                                <p class="lead fw-600 mb-lg-2 mb-0">
                                                    Arief Tarunakarya Surowidjojo
                                                </p>
                                                <p class="text-grey t-job lh-base">Komisaris (independen)</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-lg-5 px-3 pb-lg-0 pb-4">
                                        <a class="show-modal" data-type="boc" data-name="teguh-dartanto">
                                            <img src="https://assets.jago.com/web-assets/public/boc-teguh-dartanto.png"
                                                class="img-fluid w-100" alt="Teguh Dartanto">
                                            <div class="text-center">
                                                <p class="lead fw-600 mb-lg-2 mb-0">
                                                    Teguh Dartanto
                                                </p>
                                                <p class="text-grey t-job lh-base">Komisaris (independen)</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-bod" role="tabpanel" aria-labelledby="v-bod">
                                <div class="row justify-content-between">
                                    <div class="col-sm-12 col-lg-5 px-3 pb-lg-0 pb-4">
                                        <a class="show-modal" data-type="bod" data-name="arief-tandjung">
                                            <img src="https://assets.jago.com/web-assets/public/bod-arief-harris.png"
                                                class="img-fluid w-100" alt="Arief Harris Tandjung">
                                            <div class="text-center">
                                                <p class="lead fw-600 mb-lg-2 mb-0">
                                                    Arief Harris Tandjung
                                                </p>
                                                <p class="text-grey t-job lh-base">Direktur Utama</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-lg-5 px-3 pb-lg-0 pb-4">
                                        <a class="show-modal" data-type="bod" data-name="peterjan-nieuwenhuizen">
                                            <img src="https://assets.jago.com/web-assets/public/bod-peter-van.png"
                                                class="img-fluid w-100" alt="Peterjan van Nieuwenhuizen">
                                            <div class="text-center">
                                                <p class="lead fw-600 mb-lg-2 mb-0">
                                                    Peterjan van Nieuwenhuizen
                                                </p>
                                                <p class="text-grey t-job lh-base">Direktur</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-lg-5 px-3 pb-lg-0 pb-4">
                                        <a class="show-modal" data-type="bod" data-name="sonny-joseph">
                                            <img src="https://assets.jago.com/web-assets/public/bod-sonny-c-joseph.png"
                                                class="img-fluid w-100" alt="Sonny Christian Joseph">
                                            <div class="text-center">
                                                <p class="lead fw-600 mb-lg-2 mb-0">
                                                    Sonny Christian Joseph
                                                </p>
                                                <p class="text-grey t-job lh-base">Direktur</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-lg-5 px-3 pb-lg-0 pb-4">
                                        <a class="show-modal" data-type="bod" data-name="umakanth-pai">
                                            <img src="https://assets.jago.com/web-assets/public/bod-umakanth.png"
                                                class="img-fluid w-100" alt="Umakanth Rama Pai">
                                            <div class="text-center">
                                                <p class="lead fw-600 mb-lg-2 mb-0">
                                                    Umakanth Rama Pai
                                                </p>
                                                <p class="text-grey t-job lh-base">Direktur</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-lg-5 px-3 pb-lg-0 pb-4">
                                        <a class="show-modal" data-type="bod" data-name="Tjit Siat Fun">
                                            <img src="https://assets.jago.com/web-assets/public/bod-siat-fun.png"
                                                class="img-fluid w-100" alt="Tjit Siat Fun">
                                            <div class="text-center">
                                                <p class="lead fw-600 mb-lg-2 mb-0">
                                                    Tjit Siat Fun
                                                </p>
                                                <p class="text-grey t-job lh-base">Direktur Kepatuhan / Sekretaris
                                                    Perusahaan</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-kdps" role="tabpanel" aria-labelledby="v-kdps">
                                <div class="row justify-content-between">
                                    <div class="col-sm-12 col-lg-5 px-3 pb-lg-0 pb-4">
                                        <a class="show-modal" data-type="kdps" data-name="yulizar-sanrego">
                                            <img src="https://assets.jago.com/web-assets/public/dps-yulizar.png"
                                                class="img-fluid w-100" alt="Yulizar Djamaluddin Sanrego">
                                            <div class="text-center">
                                                <p class="lead fw-600 mb-lg-2 mb-0">
                                                    Yulizar Djamaluddin Sanrego
                                                </p>
                                                <p class="text-grey t-job lh-base">Ketua Dewan Pengawas Syariah</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-adps" role="tabpanel" aria-labelledby="v-adps">
                                <div class="row justify-content-between">
                                    <div class="col-sm-12 col-lg-5 px-3 pb-lg-0 pb-4">
                                        <a class="show-modal" data-type="adps" data-name="muhammad-maksum">
                                            <img src="https://assets.jago.com/web-assets/public/dps-maksum.png"
                                                class="img-fluid w-100" alt="Muhammad Maksum">
                                            <div class="text-center">
                                                <p class="lead fw-600 mb-lg-2 mb-0">
                                                    Muhammad Maksum
                                                </p>
                                                <p class="text-grey t-job lh-base">Anggota Dewan Pengawas Syariah</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-management" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true"></div>
        </section> --}}
        <div class="container text-center py-3">
            <h2 class="fs-2 text-navy fw-600">PT. PARTNERSHIP PROCUREMENT SOLUTION</h2>
            <div class="fs-5 fw-light lh-base mt-3">
                <p>
                    Didirikan pada tahun 2010 dengan kepemilikan saham 100 persen, PARTNERSHIP dimaksudkan untuk memberikan
                    solusi baik produk atau pun jasa maupun proses bagi pertumbuhan bisnis pelanggan melalui penyediaan
                    solusi
                    bidang kontruksi, interior, advertising, reklame, eksterior, outsourching, security, procurement , event
                    organizer dsb. <br><br>

                    Kekuatan PARTNERSHIP didukung oleh kemampuan sumber daya manusia yang memiliki latar belakang dan
                    pengetahuan yang kuat di bidang produk maupun jasa yang memiliki kemampuan pengalaman yang panjang dan
                    terdidik dan bermitra dengan perusahan perusahan ternama lainya. Kekuatan ini memungkinkan PARTNERSHIP
                    menjadi partner strategis dalam memberikan solusi kebutuhan bisnis pelanggan. <br><br>

                    Kami hadir untuk membantu meningkatkan pendapatan dan kemampuan memberikan solusi di luar kemampuan
                    pelanggan, meningkatkan efisiensi biaya, dan memaksimalkan pertumbuhan perusahaan melalui penerapan
                    teknologi informasi dan sumber daya manusia yang terdidik secara efektif. <br><br>

                    Nama Direktur Utama PT. Partnership Procurement Solution : Firkie Apriliza Ramadhani ,SE.,MM.,MH
                </p>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
