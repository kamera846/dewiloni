@extends('layouts.main')

@section('page-content')

<!-- start slider -->
<section class="wow animate__fadeIn p-0 main-slider mobile-height top-space">
    <div class="swiper-full-screen swiper-container w-100 white-move" data-slider-options='{ "loop": true, "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('https://via.placeholder.com/1920x900');">
                <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                <div class="container position-relative one-fourth-screen sm-h-400px">
                    <div class="row h-100">
                        <div class="col-12 d-flex flex-column justify-content-center text-center">
                                <span class="text-large text-very-light-gray font-weight-300 w-95 mx-auto margin-25px-bottom d-block sm-margin-15px-bottom">we combine design, thinking and technical craft</span>
                                <h1 class="alt-font text-uppercase text-white-2 font-weight-700 w-75 sm-w-95 mx-auto margin-35px-bottom sm-margin-15px-bottom">Crafting Digital Experiences</h1>
                                <div class="btn-dual"><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-white btn-rounded btn-medium sm-margin-two-all">Purchase Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('https://via.placeholder.com/1920x900');">
                <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                <div class="container position-relative one-fourth-screen sm-h-400px">
                    <div class="row h-100">
                        <div class="col-12 d-flex flex-column justify-content-center text-center">
                            <span class="text-large text-very-light-gray font-weight-300 w-95 mx-auto margin-25px-bottom d-block sm-margin-15px-bottom">We're a design studio that believe in the ideas</span>
                            <h1 class="alt-font text-uppercase text-white-2 font-weight-700 w-75 sm-w-95 mx-auto margin-35px-bottom sm-margin-15px-bottom">Highly Creative Solutions</h1>
                            <div class="btn-dual"><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-white btn-rounded btn-medium sm-margin-two-all">Purchase Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('https://via.placeholder.com/1920x900');">
                <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                <div class="container position-relative one-fourth-screen sm-h-400px">
                    <div class="row h-100">
                        <div class="col-12 d-flex flex-column justify-content-center text-center">
                            <span class="text-large text-very-light-gray font-weight-300 w-95 mx-auto margin-25px-bottom d-block sm-margin-15px-bottom">We are a design & development agency</span>
                            <h1 class="alt-font text-uppercase text-white-2 font-weight-700 w-75 sm-w-95 mx-auto margin-35px-bottom sm-margin-15px-bottom">Craft Elegant Solutions</h1>
                            <div class="btn-dual"><a href="https://1.envato.market/g7jrr" target="_blank" class="btn btn-white btn-rounded btn-medium sm-margin-two-all">Purchase Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- end slider pagination -->
        <!-- start slider navigation -->
        <!-- <div class="swiper-button-next light"><i class="ti-angle-right"></i></div>
        <div class="swiper-button-prev light"><i class="ti-angle-left"></i></div> -->
        <!-- end slider navigation -->
    </div>
</section>
<!-- end slider -->
<section class="wow animate__fadeIn">
    <div class="container"> 
        <div class="row align-items-center">
            <div class="col-12 col-lg-5 col-md-6 text-center md-margin-30px-bottom wow animate__fadeInLeft">
                <img src="https://via.placeholder.com/900x650" alt="" class="border-radius-6 w-100">
            </div> 
            <div class="col-12 col-lg-7 col-md-6 text-center text-md-start padding-eight-lr lg-padding-six-lr md-padding-15px-lr wow animate__fadeInRight" data-wow-delay="0.2s">
                <h6 class="alt-font text-extra-dark-gray">Cerita Mitos Danau Rana Mese</h6>
                <p>
                    Seorang Pemburu bernama Empo Mese yang setelah berburu pagi siang dan malam,Tidak mendapatkan satu ekor pun Binatang. Dia naik ke atas pohon di tengah lembah dan ketika melihat kebawah melihat seperti ada gemerlap cincin Emas,namun ketika turun Cincin Emas itu hilang. Dia tetap berulangkali melakukanya tetap sama.Kemudian ketika Cincin itu terlihat lagi,Dia melempar Korung (Tombak) ke tengah Cincin dan turun lagi.Ketika tombaknya dicabut,bukan Cincin yang tertarik tapi AIR, makin lama makin besar hingga 
                    menenggelamkannya... 
                    <a href="/about">Selengkapnya</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- end story section -->
<!-- start feature box -->
<section class="p-0 wow animate__fadeIn">
    <div class="container-fluid">
        <div class="row justify-content-center row-cols-1 row-cols-lg-4 row-cols-sm-2">
            <!-- start features box item -->
            <div class="col d-flex align-items-center border-left border-top border-right border-bottom border-color-extra-light-gray xs-no-border-right wow animate__fadeInUp last-paragraph-no-margin">
                <div class="padding-fifteen-all sm-padding-five-lr sm-padding-ten-tb">
                    <span class="d-block alt-font font-weight-600 ms-3 text-extra-dark-gray margin-25px-top margin-10px-bottom">Spot wisata</span>
                    <ul>
                        <li>Danau Rana Mese</li>
                        <li>River Tubing Sungai Wae Dingin</li>
                        <li>Bird Watching</li>
                        <li>Agrowisata Golo Loni</li>
                        <li>Spot Foto Bukit Kunang-kunang</li>
                    </ul>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col d-flex align-items-center border-top border-right border-bottom border-color-extra-light-gray md-no-border-right wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="padding-fifteen-all sm-padding-five-lr sm-padding-ten-tb">
                    <span class="d-block alt-font font-weight-600 ms-3 text-extra-dark-gray margin-25px-top margin-10px-bottom">Makanan Khas & Hasil Bumi</span>
                    <ul>
                        <li>Kripik Pegagan</li>
                        <li>Sayuran</li>
                        <li>Ikan Air Tawar</li>
                    </ul>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col d-flex align-items-center border-top border-right border-bottom border-color-extra-light-gray xs-no-border-right wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                <div class="padding-fifteen-all sm-padding-five-lr sm-padding-ten-tb">
                    <span class="d-block alt-font font-weight-600 ms-3 text-extra-dark-gray margin-25px-top margin-10px-bottom">Fasilitas & Layanan</span>
                    <ul>
                        <li>Areal parkir</li>
                        <li>Homestay / Rumah Tinggal</li>
                        <li>Warung / Kuliner</li>
                        <li>Spot Foto</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end feature box -->
<!-- start gallery section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-md-6 margin-five-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <h5 class="alt-font text-extra-dark-gray font-weight-600">Beberapa Momen yang Bisa Anda Lihat</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 filter-content overflow-hidden">
                <ul class="hover-option2 portfolio-gallery portfolio-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-medium">
                    <li class="grid-sizer"></li>
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp">
                        <a href="https://via.placeholder.com/900x650"  title="biar atributnya title, ini pake buat deskripsi aj mas..." data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="https://via.placeholder.com/900x650" alt="" class="project-img-gallery"/></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                                <h5 class="text-small text-center mt-3 font-weight-500 text-extra-dark-gray">Herman Mil Lorem Ipsum Dolorler</h5>
                            </figure>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.2s">
                        <a href="https://via.placeholder.com/900x650"  title="biar atributnya title, ini pake buat deskripsi aj mas..." data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="https://via.placeholder.com/900x650" alt="" class="project-img-gallery"/></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                                <h5 class="text-small text-center mt-3 font-weight-500 text-extra-dark-gray">Herman Mil Lorem Ipsum Dolorler</h5>
                            </figure>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.4s">
                        <a href="https://via.placeholder.com/900x650"  title="biar atributnya title, ini pake buat deskripsi aj mas..." data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="https://via.placeholder.com/900x650" alt="" class="project-img-gallery"/></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <h5 class="text-small text-center mt-3 font-weight-500 text-extra-dark-gray">Herman Mil Lorem Ipsum Dolorler</h5>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.4s">
                        <a href="https://via.placeholder.com/900x650"  title="biar atributnya title, ini pake buat deskripsi aj mas..." data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="https://via.placeholder.com/900x650" alt="" class="project-img-gallery"/></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <h5 class="text-small text-center mt-3 font-weight-500 text-extra-dark-gray">Herman Mil Lorem Ipsum Dolorler</h5>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                    <!-- start image gallery item -->
                    <li class="grid-item wow animate__fadeInUp" data-wow-delay="0.4s">
                        <a href="https://via.placeholder.com/900x650"  title="biar atributnya title, ini pake buat deskripsi aj mas..." data-group="three-columns-zoom-animation" class="lightbox-group-gallery-item">
                            <figure>
                                <div class="portfolio-img bg-extra-dark-gray"><img src="https://via.placeholder.com/900x650" alt="" class="project-img-gallery"/></div>
                                <figcaption>
                                    <div class="portfolio-hover-main text-center">
                                        <div class="portfolio-hover-box align-middle">
                                            <div class="portfolio-hover-content position-relative">
                                                <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <h5 class="text-small text-center mt-3 font-weight-500 text-extra-dark-gray">Herman Mil Lorem Ipsum Dolorler</h5>
                        </a>
                    </li>
                    <!-- end image gallery item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end gallery section -->
<!-- start blog section -->
<section class="wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Artikel Terbaru</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 blog-content">
                <ul class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col hover-option4 blog-post-style3 gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="/blog/slug">
                                    <img src="https://via.placeholder.com/900x650" alt="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="/blog/slug" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">I like the body. I like to design everything to do with the body.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">
                                        by Jay Benjamin&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="/blog/slug">
                                    <img src="https://via.placeholder.com/900x650" alt="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="/blog/slug" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Styles come and go. Design is a language, not a style.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy...</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">
                                        by Herman Miller&nbsp;&nbsp;|&nbsp;&nbsp;20 April 2017
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                    <!-- start post item -->
                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-post bg-light-gray">
                            <div class="blog-post-images overflow-hidden position-relative">
                                <a href="/blog/slug">
                                    <img src="https://via.placeholder.com/900x650" alt="">
                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                </a>
                            </div>
                            <div class="post-details padding-40px-all md-padding-20px-all">
                                <a href="/blog/slug" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom">Recognizing the need is the primary condition for design.</a>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy....</p>
                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                <div class="author">
                                    <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">
                                        by Hugh Macleod&nbsp;&nbsp;|&nbsp;&nbsp;15 March 2017
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end post item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end blog section -->
<!-- start contact section -->
<section class="wow animate__fadeIn bg-light-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-lg-6 col-md-7 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Kontak Kami</h5>
            </div>
        </div>
        <div class="row justify-content-center row-cols-1 row-cols-lg-4 row-cols-sm-2">
            <!-- start contact info item -->
            <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp;">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-map-pin icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Lokasi</div>
                <p class="mx-auto">
                    Desa Golo Loni Kecamatan Rana Mese <br> Kabupaten Manggarai Timur - NTT</p>
            </div>
            <!-- end contact info item -->
            <!-- start contact info item -->
            <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-chat icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">No Hp</div>
                <p class="mx-auto">+62 812-3875-9241</p>
            </div>
            <!-- end contact info item -->
            <!-- start contact info item -->
            <div class="col text-center xs-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-envelope icon-medium text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail</div>
                <p class="mx-auto"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></p>
            </div>
            <!-- end contact info item -->
        </div>
    </div>
</section>
<!-- end contact section -->

@endsection