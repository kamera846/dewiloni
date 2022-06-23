@extends('layouts.main')

@section('page-content')
<!-- start page title section -->
<section class="wow animate__fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-xl-8 col-md-6 d-flex flex-column justify-content-center text-center text-md-start">
                <!-- start page title -->
                <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">Judul Postingan Lorem Ipsum</h1>
                <!-- end page title -->
            </div>
            <div class="col-xl-4 col-md-6 alt-font breadcrumb justify-content-center justify-content-md-end text-small sm-margin-10px-top">
                <!-- breadcrumb -->
                <ul class="text-center text-md-start text-uppercase">
                    <li><span class="text-dark-gray">25 April 2017</span></li>
                    <li><span class="text-dark-gray">Oleh Jay Benjamin</span></li>
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
                <div class="col-12 blog-details-text last-paragraph-no-margin">
                    <img src="https://via.placeholder.com/900x631" alt="" class="w-100 margin-45px-bottom">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <strong class="text-extra-dark-gray">Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more <u>recently with desktop publishing</u> software like aldus pagemaker including versions.</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the <strong class="text-extra-dark-gray">first true generator on the internet.</strong> It uses a dictionary of over 200 Latin words, combined with a <u>handful of model sentence structures,</u> to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                    <blockquote class="border-color-deep-pink">
                        <p>Reading is not only informed by what’s going on with us at that moment, but also governed by how our eyes and brains work to process information. What you see and what you’re experiencing as you read these words is quite different.</p>
                        <footer>Jason Maria</footer>
                    </blockquote>
                    <img src="https://via.placeholder.com/900x600" alt="" class="w-100 margin-45px-bottom">
                    <!-- dropcaps -->
                    <p><span class="first-letter first-letter-block bg-extra-dark-gray text-white-2">M</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries. Simply dummy text of the printing and typesetting industry. It has survived not only five centuries. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <!-- end dropcaps -->
                    <figure class="wp-caption alignleft"><img alt="" src="https://via.placeholder.com/350x255"><figcaption class="wp-caption-text">There is no sincerer love than the love of food.</figcaption></figure>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                    <span class="text-extra-dark-gray font-weight-500 margin-15px-bottom d-block text-medium">You can never quit. Winners never quit, and quitters never win</span>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour.</p>
                </div>
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