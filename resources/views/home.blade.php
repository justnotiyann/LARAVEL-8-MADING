@extends('index')

@section('body')
    <section class="mt-5">
        <div class="row p-5">
            {{-- sisi kiri --}}
            <div class="col-6">
                <h2 class="font-weight-bold">Hello Netijen Ikmi</h2>
                <h4 class="font-weight-bold">Sudahi Scroll Tiktokmu,</h4>
                <h6 class="font-weight-bold">Scroll Ikmi News Ajaa!!</h6>


                <hr>

                <p>Disini kamu bisa mendapatkan berita yang paling Hot dan berita yang paling banyak
                    diperbincangkan. Dari
                    mulai prestasi kampus, info UKM dan Hima,
                    info kampus, bahkan sampai gosip yang ada di STMIK Ikmi paling mencengangkan juga ada lohhh.
                </p>

                <p>
                    Buat kamu netijen Ikmi jangan sampai
                    kelewatan berita terbaruu. Jangan sampai kamu jadi ga uptodate sama Berita di kampus kamu
                    sendiri guyss.
                    Jadi pantengin aja terus I.News (IKMI News) setiap harinya yaa, siapa tau namamu ada
                    disini lohhhh!!
                </p>

                {{-- button for modal --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Follow us
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Judul Popup</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul>
                                    <li>
                                        <span class="icon"><i class="fa fa-window-maximize" aria-hidden="true"></i></span>
                                        <a href="http://pmb.ikmi.ac.id/">ikmi.ac.id</a>
                                    </li>
                                    <li>
                                        <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                        <a href="info.ikmi cirebon@gmail.com">info.ikmi cirebon@gmail.com</a>
                                    </li>
                                    <li>
                                        <span class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                        <a
                                            href="https://instagram.com/stmik_ikmi_cirebon?igshid=NTc4MTIwNjQ2YQ==">@stmik_ikmi_cirebon</a>
                                    </li>
                                    <li>
                                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </i></span>
                                        <a href="https://maps.app.goo.gl/QiSms4ugyY7igVmn8">Alamat STMIK IKMI
                                            Cirebon</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">

                </div>

            </div>
            {{-- sisi kanan --}}
            <div class="col-6 d-flex justify-content-center">
                <img src="/img/orang.png" alt="">
            </div>
        </div>


        <div class="berita p-5">
            <div class="row">


                {{-- laravel blade snippets --}}

                @foreach ($beritas as $berita)
                    {{-- masukkan design kalian disini --}}
                    <div class="col-md-4">
                        <div class="himka">
                            <div class="himka-body">
                                {{-- <h2>Pentingnya Sertifikasi dalam Dunia Kerja</h2> --}}
                                <h2>{{ $berita->judul }}</h2>

                                <ul>
                                    <li>
                                        <span class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                        <a href="https://instagram.com/himka_ikmi?igshid=MzRlODBiNWFlZA==">@himka_ikmi</a>
                                    </li>
                                </ul>
                                <div class="berita4">
                                    <img src="foto/Berita4.jpeg" alt="berita4">

                                    {{-- konten --}}
                                    <p>{{ Str::limit($berita->deskripsi, 200) }}</p>

                                    <div class="button-group-body d-flex justify-content-center ">
                                        <button type="button" class="btn btn-primary w-100 rounded-4" data-toggle="modal"
                                            data-target=".bd-example-modal-xl-{{ $berita->id }}">Kepoin
                                            Kuy</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- ini modal --}}
                        <div class="modal fade bd-example-modal-xl-{{ $berita->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content p-5">
                                    <div class="modal-tittle p-5">
                                        {{-- judul --}}
                                        <h3 class="font-weight-bold py-3 text-center">{{ $berita->judul }}</h3>
                                        <div class="berita4">
                                            <div class="foto-modal d-flex justify-content-center align-items-center">
                                                <img src="foto/Berita4.jpeg" alt="berita4">
                                            </div>
                                            <div class="content-body text-justify">
                                                <p>
                                                    {{ $berita->deskripsi }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <form class="text-start">
                                        <div class="form-group">
                                            <label for="komentar" class="text-start">Masukkan Komentar</label>
                                            <input type="text" class="form-control" id="komentar"
                                                aria-describedby="emailHelp" placeholder="Masukkan komentar">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
