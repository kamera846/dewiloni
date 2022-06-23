@extends('layouts.main')

@section('page-content')


<!-- start page title section -->
<section class="wow animate__fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 text-md-start text-center">
                <!-- start page title -->
                <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">Artikel Kami</h1>
                <!-- end page title -->
            </div>
            <div class="col-lg-4 col-md-6 breadcrumb text-small alt-font justify-content-center justify-content-md-end sm-margin-15px-top">
                <!-- breadcrumb -->
                <ul>
                    <li><a href="/" class="text-dark-gray">Beranda</a></li>
                    <li class="text-dark-gray">Artikel</li>
                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->

<!-- start post content section --> 
<section>
    <div class="container">
        <div class="row justify-content-center">
            <main class="col-12 col-xl-9 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                <!-- start post item --> 
                <div class="col-12 blog-post-content margin-60px-bottom sm-margin-30px-bottom text-center text-md-start">
                    <div class="blog-image"><a href="/blog/slug"><img src="https://via.placeholder.com/1200x752" alt=""/></a></div>
                    <div class="blog-text border-all d-inline-block w-100">
                        <div class="content padding-50px-all sm-padding-20px-all">
                            <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Diposting June 30, 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>Oleh Jhon Doe</span></div>
                            <a href="/blog/slug" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block">This is a standard post with a preview image</a>
                            <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text.</p>
                        </div>
                    </div>
                </div>
                <!-- end post item --> 
                <!-- start pagination -->
                <div class="col-12 text-center margin-100px-top md-margin-50px-top wow animate__fadeInUp">
                    <div class="pagination text-small text-uppercase text-extra-dark-gray">
                        <ul class="mx-auto">
                            <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i> Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next <i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end pagination -->
            </main>
            <aside class="col-12 col-xl-3 col-lg-4 col-md-7">
                <div class="d-inline-block w-100 margin-45px-bottom sm-margin-25px-bottom">
                    <form action="search-result.html" method="post" class="position-relative">
                        <div class="position-relative">
                            <input name="text" id="text" data-email="required" type="text" placeholder="Cari postingan..." class="bg-transparent padding-40px-right text-small mb-0 border-color-extra-light-gray medium-input float-start">
                            <button type="submit" class="bg-transparent btn position-absolute right-0 top-1 search-button"><i class="fas fa-search ms-0"></i></button>
                        </div>   
                    </form>
                </div>
                <div class="margin-45px-bottom sm-margin-25px-bottom">
                    <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Artikel Terbaru</span></div>
                    <ul class="latest-post position-relative">
                        <li class="media d-flex">
                            <figure class="flex-shrink-0">
                                <a href="/blog/slug"><img src="https://via.placeholder.com/480x358" alt=""></a>
                            </figure>
                            <div class="media-body flex-grow-1 text-small"><a href="/blog/slug" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Traveling abroad will change you forever</span></a> <span class="d-block text-medium-gray text-small">April 30, 2016</span></div>
                        </li>
                        <li class="media d-flex">
                            <figure class="flex-shrink-0">
                                <a href="/blog/slug"><img src="https://via.placeholder.com/480x358" alt=""></a>
                            </figure>
                            <div class="media-body flex-grow-1 text-small"><a href="/blog/slug" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Having a new perspec-tive on new york city</span></a> <span class="d-block text-medium-gray text-small">March 10, 2016</span></div>
                        </li>
                        <li class="media d-flex">
                            <figure class="flex-shrink-0">
                                <a href="/blog/slug"><img src="https://via.placeholder.com/480x358" alt=""></a>
                            </figure>
                            <div class="media-body flex-grow-1 text-small"><a href="/blog/slug" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">The incredible talents of street performers</span></a> <span class="d-block text-medium-gray text-small">March 05, 2016</span></div>
                        </li>
                        <li class="media d-flex">
                            <figure class="flex-shrink-0">
                                <a href="/blog/slug"><img src="https://via.placeholder.com/480x358" alt=""></a>
                            </figure>
                            <div class="media-body flex-grow-1 text-small"><a href="/blog/slug" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Praesent placerat risus quis eros</span></a> <span class="d-block text-medium-gray text-small">March  01, 2016</span></div>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- end blog content section -->  


@endsection