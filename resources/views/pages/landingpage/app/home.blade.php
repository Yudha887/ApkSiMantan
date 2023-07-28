@php
use App\Models\Like;
@endphp

@extends("pages.landingpage.main")

@section("title", "Home")

@section("main_content")

<section class="breadcrumb-area d-flex align-items-center" style="background-size: cover; background-repeat: no-repeat; background-image:url({{ url('/images/') }}/background-bps.png)">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="breadcrumb-wrap text-center">
                    <div class="breadcrumb-title mb-30">
                        <h2>Dokumentasi Data Kinerja</h2>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    Beberapa Dokumentasi Kegiatan Kinerja Karyawan BPS Indramayu
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-blog pt-100 pb-100">
    <div class="container">
        <center>
            <h3>
                Dokumentasi Terbaru
            </h3>
        </center>
        <hr>
        <div class="row">
            @foreach ($post as $item)
            @php
            $likes = Like::where("post_id", $item["id"])->count();
            @endphp
            <div class="col-lg-12">
                <h4>
                    <i class="far fa-user"></i> {{ $item["user"]["name"] }}
                </h4>
                <div class="bsingle__post mb-50">
                    <div class="bsingle__post-thumb">
                        @if (empty($item["image"]))
                        <img src="{{ url('/landing-page') }}/img/blog/inner_b1.jpg" alt="">    
                        @else
                        <img src="{{ $item["image"] }}" >
                        @endif
                    </div>
                    <div class="bsingle__content">
                        <div class="meta-info">
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="alert alert-secondary">
                                        # {{ $item["flags"]["name"] }}
                                    </div>
                                </div>
                            </div>
                            
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="far fa-user"></i> Dibuat Oleh : {{ $item["user"]["name"] }}
                                    </a>
                                </li>
                                <li>
                                    <i class="far fa-comments"></i>
                                    {{ $likes }} Komentar
                                </li>
                            </ul>
                        </div>
                        <p>
                            {{ $item["description"] }}
                        </p>
                        <div class="slider-btn">
                            <a href="{{ url('/'.$item["id"]) }}" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">
                                Selengkapnya
                            </a>
                            <div class="btn-after" data-animation="fadeInRight" data-delay=".8s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection