@extends('frontend.layout.app')

@section('title')
    Hubungi kami
@endsection

@push('css')
@endpush

@section('content')
    <!-- Judul -->
    <section class="container_border">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center text-white">
                    <h1><strong>Hubungi kami</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Judul -->
    <section class="s-line-hr-top" style="min-height: 100svh;background-color: #fff">
        <section class="address py-5 mx-2 mx-lg-0">
            <div class="container container-gap-lg card-address" style="background-color: #EFEFEf">
                <div class="row justify-content-center">
                    <div class="header col-lg-6 col-md-6 col-sm-12">
                        <div class="text-header-address">
                            <h3>Kantor Pusat</h3>
                            <p>Jika Anda memiliki pertanyaan lainnya, jangan ragu untuk menghubungi kantor kami</p>
                        </div>
                        <div class="text-address">
                            <p>PT Partnership Procurement Solution<br>Jl. Terusan Jakarta No.42, Kec.
                                Kiaracondong<br>Kota Bandung, Jawa Barat 40281</p>
                        </div>
                        <div class="text-footer-address">
                            <div class="list-icon">
                                <h3>Hotline</h3>
                                @foreach ($contact as $key => $data_contact)
                                    @php
                                        $whatsapp = explode(',', $data_contact->content);
                                    @endphp
                                    @if ($key == 0)
                                        <div class="text-icon"><i
                                                class="small-icon fa-solid fa-phone"></i>+{{ $whatsapp[0] }}
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="list-icon">
                                <h3>Email</h3>
                                @foreach ($email as $key => $data_email)
                                    @php
                                        $email_1 = explode(',', $data_email->content);
                                    @endphp
                                    @if ($key == 0)
                                        <div class="text-icon"><i
                                                class="small-icon fa-solid fa-envelope"></i>{{ $email_1[1] }}
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 gmap">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.10196433844266!2d107.64939006629403!3d-6.912625189480249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7ecd3aeddb7%3A0xb1b80611740d391e!2sPartner%20Workshop!5e0!3m2!1sen!2sid!4v1719229867483!5m2!1sen!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            title="maps"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="contacts">
            <div class="container container-gap-lg py-0">
                <div class="row">
                    <div class="col-sm-12 col-md-2 col-lg-3">
                        <h3 class="title-contact text-navy fw-600 mb-3">
                            Kontak </h3>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-9">
                        <p class="text-grey mb-4">
                            Kami dengan senang hati akan menjawab pertanyaan Anda, silakan hubungi melalui salah satu kanal
                            di bawah ini. </p>
                        <div class="row">
                            <!-- partner care -->
                            <div class="col-sm-12 col-md-6 col-lg-6 pb-lg-0 pb-4">
                                <h4 class="sub-title fw-600 mb-12px">
                                    Partner Care </h4>
                                <!-- start hotline -->
                                <div class="list-icon">
                                    <h3>Hotline</h3>
                                    @foreach ($contact as $key => $data_contact)
                                        @php
                                            $whatsapp = explode(',', $data_contact->content);
                                        @endphp
                                        @if ($key == 0)
                                            <div class="text-icon"><i
                                                    class="small-icon fa-solid fa-phone"></i>+{{ $whatsapp[0] }}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- end hotline -->
                                <!-- start whatsapp -->
                                <div class="list-icon">
                                    <h3>Whatsapp</h3>
                                    @foreach ($contact as $key => $data_contact)
                                        @php
                                            $whatsapp = explode(',', $data_contact->content);
                                        @endphp
                                        @if ($key == 0)
                                            <div class="text-icon"><i
                                                    class="small-icon fa-brands fa-whatsapp"></i>{{ $whatsapp[1] }} -
                                                {{ $whatsapp[2] }}
                                            </div>
                                        @endif
                                        @if ($key > 0)
                                            <div class="text-icon" style="margin-left:34px ;">{{ $whatsapp[1] }} -
                                                {{ $whatsapp[2] }}</div>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- end whatsapp -->
                                <!-- start email -->
                                <div class="list-icon">
                                    <h3>Email</h3>
                                    @foreach ($email as $key => $data_email)
                                        @php
                                            $email_1 = explode(',', $data_email->content);
                                        @endphp
                                        @if ($key == 0)
                                            <div class="text-icon"><i
                                                    class="small-icon fa-solid fa-envelope"></i>{{ $email_1[1] }}
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <!-- end email -->

                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <h4 class="sub-title fw-600 mb-12px">
                                    Partner Media </h4>
                                <div class="text-footer-address ">
                                    @foreach ($sosmed as $key => $data_sosmed)
                                        @php
                                            $sosmed_contact = explode(',', $data_sosmed->content);
                                        @endphp
                                        <div class="list-icon">
                                            <h3>{{ $sosmed_contact[0] }}</h3>
                                            <div class="text-icon"><i
                                                    class="small-icon fa-brands @if ($sosmed_contact[0] == 'Instagram') fa-instagram @elseif ($sosmed_contact[0] == 'Facebook') fa-facebook @elseif ($sosmed_contact[0] == 'Linkedin') fa-linkedin-in @else fa-youtube @endif"></i>{{ $sosmed_contact[2] }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rekening">
            <div class="container container-gap-lg pt-0 pb-5">
                <div class="row">
                    <div class="col-sm-12 col-md-2 col-lg-3">
                        <h3 class="title-contact text-navy fw-600 mb-3">
                            Rekening </h3>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-9">
                        <div class="row g-4">
                            @foreach ($rekening as $data_rekening)
                                @php
                                    $data = explode(',', $data_rekening->content);
                                @endphp
                                <div class="col-12 col-md-6 col-lg-6">

                                    <div class="card border-0 shadow rounded-4">
                                        <div class="card-body text-center py-0">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    @if ($data[1] == 'BRI')
                                                        <img src="{{ asset('assets/img/bank/BRI.png') }}" class="w-100"
                                                            alt="{{ $data[1] }}">
                                                    @elseif ($data[1] == 'BNI')
                                                        <img src="{{ asset('assets/img/bank/BNI.png') }}" class="w-100"
                                                            alt="{{ $data[1] }}">
                                                    @elseif ($data[1] == 'Mandiri')
                                                        <img src="{{ asset('assets/img/bank/Mandiri.png') }}"
                                                            class="w-100" alt="{{ $data[1] }}">
                                                    @else
                                                        <img src="{{ asset('assets/img/bank/BCA.png') }}" class="w-100"
                                                            alt="{{ $data[1] }}">
                                                    @endif
                                                </div>
                                                <div class="col-9">
                                                    <div class="list-icon mt-3">
                                                        <h3>Nomor Rekening</h3>
                                                        <div class="text-icon"><i
                                                                class="small-icon fa-regular fa-credit-card"></i>{{ $data[0] }}
                                                        </div>
                                                    </div>
                                                    <p class="text-grey">a/n {{ $data[2] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

@push('scripts')
@endpush
