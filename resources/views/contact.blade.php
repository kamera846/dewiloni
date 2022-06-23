@extends('layouts.main')

@section('page-content')
    
<!-- start page title section -->
<section class="wow animate__fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 text-md-start text-center">
                <!-- start page title -->
                <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">Kontak Kami</h1>
                <!-- end page title -->
            </div>
            <div class="col-lg-4 col-md-6 breadcrumb text-small alt-font justify-content-center justify-content-md-end sm-margin-15px-top">
                <!-- breadcrumb -->
                <ul>
                    <li><a href="/" class="text-dark-gray">Beranda</a></li>
                    <li class="text-dark-gray">Kontak</li>
                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->
<!-- start contact section -->
<section class="wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container px-0">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase mb-0">Kontak Kami</h5>
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
<!-- start map section -->
<section class="p-0 one-second-screen md-h-400px sm-h-300px wow animate__fadeIn">
    <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63108.61894201271!2d120.48145787477596!3d-8.664071399828991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db30ce037da3355%3A0xae1da5b7c8762ba7!2sGolo%20Loni%2C%20Borong%2C%20East%20Manggarai%20Regency%2C%20East%20Nusa%20Tenggara!5e0!3m2!1sen!2sid!4v1655956631993!5m2!1sen!2sid"></iframe>
</section>
<!-- end map section -->
<!-- start form section -->
<section class="wow animate__fadeIn parallax" data-parallax-background-ratio="0.5" style="background-image:url('https://via.placeholder.com/1920x1080');">
    <div class="opacity-full bg-black"></div>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <!-- start contact-form head -->
            <div class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <div class="text-small text-medium-gray alt-font text-uppercase margin-5px-bottom">Hubungi Kami</div>
                <h5 class="alt-font text-white-2 font-weight-600 mb-0">Punya pertanyaan atau saran?</h5>
            </div>
            <!-- end contact-form head -->
        </div>
        <!-- start contact-form -->
        <form id="project-contact-form-4" action="email-templates/contact-form.php" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="form-results d-none"></div>
                </div>
                <div class="col-12 col-md-6">
                    <input type="text" name="nama" id="nama" placeholder="Nama lengkap *" class="bg-transparent border-color-medium-dark-gray medium-input required">
                </div>
                <div class="col-12 col-md-6">
                    <input type="email" name="email" id="email" placeholder="Alamat e-mail *" class="bg-transparent border-color-medium-dark-gray medium-input required">
                </div>
                <div class="col-12">
                    <textarea name="pesan" id="pesan" placeholder="Isi pesan *" rows="6" class="bg-transparent border-color-medium-dark-gray medium-textarea" required></textarea>
                </div>
                <div class="col-12 text-center">
                    <button id="project-contact-us-4-button" type="submit" class="btn btn-deep-pink btn-rounded btn-large margin-20px-top sm-no-margin-top submit">Kirim Pesan</button>
                </div>
            </div>
        </form>
        <!-- end contact-form -->
    </div>
</section>
<!-- end form section -->

@endsection