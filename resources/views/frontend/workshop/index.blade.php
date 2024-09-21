@extends('frontend.layout.app')

@section('title')
    Workshop
@endsection

@push('css')
    <style type="text/css">
        section {
            margin-top: 76px
        }

        #partnerworkshop #cover img {
            width: 100%;
        }

        #partnerworkshop #featured .wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 0 20px;
            padding: 15px 0;
        }

        #partnerworkshop #featured .col {}

        #partnerworkshop #featured .col a {
            display: block;
            margin: auto;
        }

        #partnerworkshop #featured .col div {
            text-align: center;
            margin-top: 20px;
            padding: 0 30px;
            font-weight: bold;
        }

        #partnerworkshop #featured .col a {
            height: auto;
            width: 100%;
            margin: 0;
            text-align: center;
        }

        #partnerworkshop #featured .col img {
            width: 160px;
            height: auto;
            object-fit: cover;
            object-position: center;
            transition: .2s;
        }

        #partnerworkshop #featured:hover .col img {
            opacity: .8;
        }

        #partnerworkshop #featured .col img:hover {
            bottom: -10px;
            opacity: 1;
        }

        #gallery {
            padding: 20px;
        }

        #gallery a {
            display: block;
            width: 100%;
            padding-top: 135%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            border-radius: 20px;
        }

        @media(max-width: 768px) {
            #partnerworkshop #featured .wrapper {
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 20px 10px;
            }

            #partnerworkshop #featured .col {
                padding: 0;
            }

            #partnerworkshop #featured .col:nth-child(3) {
                grid-column: 1/3;
            }

            #partnerworkshop #featured .col div {
                padding: 0 10px;
            }

            #partnerworkshop #featured .col img {
                width: 100px;
            }
        }

        #map {
            display: block;
            background: url(/assets/img/workshop/map_2.png) no-repeat center center;
            background-size: cover;
            width: 100%;
            padding-top: 85%;
            box-shadow: inset 0 5px 0 rgba(0, 0, 0, .1), inset 0 -5px 0 rgba(0, 0, 0, .1);
        }
    </style>
@endpush

@section('content')
    <section id="partnerworkshop" style="background-color: #fff">
        <figure id="cover">
            <a href="https://wa.me/+6282126000126" target="_Blank"><img
                    src="{{ asset('assets/img/workshop/cvr_2.png') }}" /></a>
        </figure>
        <div id="featured">
            <div class="wrapper clear">
                <div class="col">
                    <a href="https://wa.me/+6282126000126"><img src="{{ asset('assets/img/workshop/pw_1.png') }}" /></a>
                    <div>Anda tidak perlu repot repot untuk order ke kita, anda hanya memilih kompenen saja nanti kami
                        kirim </div>
                </div>
                <div class="col">
                    <a href="https://wa.me/+6282126000126"><img src="{{ asset('assets/img/workshop/pw_3.png') }}" /></a>
                    <div>Tidak perlu khawatir karna kami berani dalam memberikan garansi akan produk yang kami buat,
                        berbeda dengan provider lainya</div>
                </div>
                <div class="col">
                    <a href="https://wa.me/+6282126000126"><img src="{{ asset('assets/img/workshop/pw_2.png') }}" /></a>
                    <div>Kualitas Harga kami selalu ungggul dari provider lain, karena kami mempunyai daya dukung
                        peralatan yang lengkap dan memadai sesuai standar dan kami memiliki jam terbang yang tinggi dan
                        sudah riset kompetitor Lainya, serta dapat menyesuaikan anggaran anda </div>
                </div>

            </div>
        </div>
    </section>
    <div class="wrapper clear" style="background-color: #fff">
        <article>
            <div id="gallery" class="row g-3">
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/1.png') }}"
                        style="background-image:url('/assets/img/workshop/1.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/2.png') }}"
                        style="background-image:url('/assets/img/workshop/2.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/3.png') }}"
                        style="background-image:url('/assets/img/workshop/3.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/4.png') }}"
                        style="background-image:url('/assets/img/workshop/4.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/5.png') }}"
                        style="background-image:url('/assets/img/workshop/5.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/6.png') }}"
                        style="background-image:url('/assets/img/workshop/6.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/7.png') }}"
                        style="background-image:url('/assets/img/workshop/7.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/8.png') }}"
                        style="background-image:url('/assets/img/workshop/8.png');"></a>
                </div>
                <div class="col-4">
                    <a class="lightbox" title="Partnership" href="{{ asset('assets/img/workshop/9.png') }}"
                        style="background-image:url('/assets/img/workshop/9.png');"></a>
                </div>
            </div>
        </article>
    </div>
    </section>
    <a id="map" class="popup"
        href="https://www.google.com/maps/search/Jl.+Cikutra+No.+171/@-6.8957498,107.6412886,17z/data=!3m1!4b1"
        target="_Blank"></a>
@endsection

@push('scripts')
@endpush
