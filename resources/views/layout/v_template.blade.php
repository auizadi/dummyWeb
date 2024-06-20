<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title', 'Lorem Ipsum')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template') }}/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{ asset('template') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('template') }}/css/headers.css" rel="stylesheet">
    @yield('css')

     <!-- icon -->
     <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
     crossorigin="anonymous"
     referrerpolicy="no-referrer"/>
   
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,800;1,800&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <!-- akhir font -->

     <!--Favicon-->
     {{-- <link rel="shortcut icon" href="{{ asset('img') }}/logo_masjid_mujahidin_png.png" type="image/x-icon"> --}}
     <link rel="icon" href="{{ asset('img') }}/logo_masjid_mujahidin_png.png" type="image/x-icon">


  </head>
  <body>

    <main>
    <div class="container-fluid">

        @include('layout.v_navbar')

    </div>

    @yield('content')

    </main>

    <section style="position: relative;">
        <img src="https://dummyimage.com/1400x415/c4c4c4/000000" class="img-fluid" alt="Footer Image" style="width: 100%; height: auto;">

        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-md-none" style="background-color: rgba(255, 255, 255, 0.63);"></div>

        <!-- Content -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-2 text-center text-md-start">
                            <h1 class="text-dark fw-bold" style="font-size: min(3vw, 36px);">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h1>
                            <div class="col-md-8 mx-auto mx-md-0">
                                <h5 class="text-dark fw-semibold" style="font-size: min(2vw, 18px);">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
                                    <a href="#" class="text-primary">lorem@gmail.com</a> Nulla consequat massa quis enim
                                    <a href="#" class="text-primary">+123 4567890</a></h5>
                            </div>
                            <div class="button-effect">
                                <a href="/kontak" class="btn btn-primary effect effect-1 fw-bold">Kontak Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <!-- Footer -->
  <footer class="text-lg-start text-white" style="background-color: #018947">
    <!-- Grid container -->
    <div class="container">
        <!--Grid row-->
        <div class="row row-section mt-5">
            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 f-section">
                <img src="https://dummyimage.com/415x120/c4c4c4/000000" alt="" width="100%" height="auto">
                <p class="text-justify">
                    <span style="display: inline-block; text-align: justify; font-size: 14px;">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </span>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 f-section">
                <h5 class="mb-4 fw-bold">Kunjungi Kami:</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-12 f-section">
                <h5 class="mb-2 fw-bold">Ikuti Kami di:</h5>
                <p class="d-flex align-items-center icon-text"><i class="fa-solid fa-earth-asia fa-2x"></i><span class="">Lorem ipsum dolor sit amet</span></p>
                <p class="d-flex align-items-center icon-text"><i class="fa-solid fa-square-phone fa-2x"></i><span class=""> +123 4567890</span></p>
                <p class="d-flex align-items-center icon-text"><i class="fa-brands fa-square-facebook fa-2x"></i><span class="">Lorem ipsum dolor sit amet</span></p>
                <p class="d-flex align-items-center icon-text"><i class="fa-brands fa-youtube fa-2x"></i><span class="">Lorem ipsum dolor sit amet</span></p>
            </div>
            <!-- Grid column -->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-white f-row" style="background-color: #017232">
        <p class="mx-auto">
            © Copyright by Lorem ipsum dolor sit amet
        </p>
    </div>
    <!-- Copyright -->
  </footer>

  <!-- Footer -->

    <script src="{{ asset('template') }}/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </body>
</html>
