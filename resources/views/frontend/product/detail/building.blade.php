@extends('frontend.layout.app')

@section('title')
    {{ $products->name }}
@endsection

@push('css')
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    {{-- <h1><strong>{{ $products->name }}</strong></h1> --}}
                    <img src="{{ asset('storage/logo/light/' . $products->logo) }}" alt="{{ $products->name }}" width="500">
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <p class="lead fw-normal">{{ $products->desc }}</p>
            </div>
        </div>
        <!-- Marketing messaging and featurettes
                                                                                                                                                                                                                                                                                          ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
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
                            <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
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
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
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
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
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
                    <h2>Keunggulan <b>{{ $products->name }}</b></h2>

                    <ul class="fs-5">
                        <li><b>Layanan Komprehensif</b><br>Kami menyediakan layanan pembersihan dan pemeliharaan yang
                            lengkap, dari pembersihan harian hingga perawatan rutin, memastikan gedung Anda selalu dalam
                            kondisi terbaik.</li>
                        <li><b>Tim Profesional</b><br>Dikelola oleh tenaga ahli yang berpengalaman, kami menggunakan teknik
                            dan peralatan terbaru untuk hasil yang efektif dan efisien.</li>
                        <li><b>Kustomisasi Layanan</b><br>Menawarkan solusi yang disesuaikan dengan kebutuhan spesifik
                            gedung Anda, termasuk frekuensi layanan dan jenis perawatan yang dibutuhkan.
                        </li>
                        <li><b>Kualitas dan Keamanan</b><br>Kami mengutamakan penggunaan produk dan prosedur yang aman dan
                            ramah lingkungan, menjaga kebersihan dan keamanan di setiap aspek layanan kami.</li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                        height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2>Layanan <b>{{ $products->name }}</b></h2>
                    <ul class="fs-5">
                        <li><b>Pembersihan Rutin</b><br>Pembersihan harian atau mingguan untuk menjaga kebersihan dan
                            kerapihan gedung.</li>
                        <li><b>Pemeliharaan Preventif</b><br>Perawatan berkala untuk mencegah kerusakan dan memastikan
                            fungsi optimal sistem dan fasilitas gedung.</li>
                        <li><b>Gathering & Celebration</b><br>Layanan pembersihan mendalam seperti pembersihan karpet,
                            jendela, dan area khusus.</li>
                        <li><b>Ticketing & Catering</b><br>Pemeliharaan area luar gedung, termasuk taman dan fasad.</li>
                    </ul>
                </div>
                <div class="col-md-5 order-md-1">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette align-items-center">
                <div class="col-md-7">
                    {{-- <h2>And lastly, this one. <span class="text-muted">Checkmate.</span> --}}
                    </h2>
                    <p class="fs-5">Partnership Building Maintenance & Cleaning menyediakan layanan pembersihan dan
                        pemeliharaan gedung yang menyeluruh, memastikan lingkungan Anda bersih, terawat, dan aman. Dengan
                        tim profesional dan solusi yang disesuaikan, kami menjaga kondisi optimal gedung Anda dengan
                        kualitas dan efisiensi tinggi.
                    </p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg>

                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
