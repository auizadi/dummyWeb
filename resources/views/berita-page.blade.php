@extends('layout.v_template')
@section('title', 'Lorem Ipsum')
@section('css')
<link rel="stylesheet" href="{{asset('styleCSS/berita.css')}}">
@endsection
@section('content')

    <!-- topik -->

<div class="container-fluid ">
  <div class="row align-self-center justify-content-center">
    <div class="col-lg-6 col-md-12 order-md-2 order-lg-1 order-2" >
      <h1>Lorem ipsum</h1>
      <p id="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
    </div>
    <div class="col-lg-6 col-md-12 order-md-1 order-lg-2 order-1">
      <img src="{{ asset('img/bahan2.png') }}" alt="" class="img-responsive">
    </div>
  </div>
</div>

<!-- akhir topik -->

{{-- carousel --}}

<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="https://dummyimage.com/1295x450/c4c4c4/000000" class="d-block w-100 c-img" alt="...">
            <div class="carousel-caption top-0 d-none d-md-block">
                <a href="#"><h5 class="bg-success text-light fw-bold fs-1">Lorem ipsum dolor sit amet</h5></a>
                <div class="btn btn-success">Read More</div>
            </div>
      </div>
      <div class="carousel-item ">
        <img src="{https://dummyimage.com/1295x450/c4c4c4/000000" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-1 d-none d-md-block">
            <a href="#"><h5 class="bg-success text-light fw-bold fs-1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit <br>
              <p style="line-height: 1em; font-size: 9pt;  font-weight:100;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p></h5></a>
            <div class="btn btn-success">Read More</div>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="https://dummyimage.com/1295x450/c4c4c4/000000" class="d-block w-100 c-img" alt="...">
        <div class="carousel-caption top-1 d-none d-md-block">
            <a href="#"><h5 class="bg-success text-light fw-bold fs-1">Lorem ipsum dolor sit amet<br> 
              <p style="line-height: 1em; font-size: 9pt;  font-weight:100;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p></h5></a>
            <div class="btn btn-success">Read More</div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


<!-- berita -->
<div class="container">

  <h4 class="text-center my-3 text-uppercase">Lorem ipsum dolor</h4>
  <h2 class="text-center my-3">Lorem ipsum dolor sit amet</h2>
  <div class="img-berita row mt-2 g-5 justify-content-center">
    <div class="col-12 col-md-6 col-lg-4 col-xl-4 justify-content-lg-center">
        <a href="#" class="my-3"><img src="https://dummyimage.com/300x200/c4c4c4/000000" width="100%" alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
        <br>
        <p class="tgl">MAY 27, 2024 | <a href="#">consectetuer</a></p>
        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officiis reprehenderit repellendus numquam iusto deleniti veritatis modi quibusdam dolorum tenetur expedita deserunt impedit possimus, recusandae perspiciatis ab ut facere adipisci!...</p>

        <a href="#" class="more">READ MORE</a>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="https://dummyimage.com/300x200/c4c4c4/000000}" width="100%"  alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
        <br>
        <p class="tgl">MAY 27, 2024 | <a href="#">consectetuer</a></p>
        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officiis reprehenderit repellendus numquam iusto deleniti veritatis modi quibusdam dolorum tenetur expedita deserunt impedit possimus, recusandae perspiciatis ab ut facere adipisci!...</p>

        <a href="#" class="more">READ MORE</a>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="https://dummyimage.com/300x200/c4c4c4/000000" width="100%"  alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
        <br>
        <p class="tgl">MAY 27, 2024 | <a href="#">consectetuer</a></p>
        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officiis reprehenderit repellendus numquam iusto deleniti veritatis modi quibusdam dolorum tenetur expedita deserunt impedit possimus, recusandae perspiciatis ab ut facere adipisci!...</p>

        <a href="#" class="more">READ MORE</a>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="https://dummyimage.com/300x200/c4c4c4/000000" width="100%"  alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
        <br>
        <p class="tgl">MAY 27, 2024 | <a href="#">consectetuer</a></p>
        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officiis reprehenderit repellendus numquam iusto deleniti veritatis modi quibusdam dolorum tenetur expedita deserunt impedit possimus, recusandae perspiciatis ab ut facere adipisci!...</p>

        <a href="#" class="more">READ MORE</a>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="https://dummyimage.com/300x200/c4c4c4/000000" width="100%"  alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
        <br>
        <p class="tgl">MAY 27, 2024 | <a href="#">consectetuer</a></p>
        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officiis reprehenderit repellendus numquam iusto deleniti veritatis modi quibusdam dolorum tenetur expedita deserunt impedit possimus, recusandae perspiciatis ab ut facere adipisci!...</p>

        <a href="#" class="more">READ MORE</a>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="https://dummyimage.com/300x200/c4c4c4/000000" width="100%"  alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
        <br>
        <p class="tgl">MAY 27, 2024 | <a href="#">consectetuer</a></p>
        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officiis reprehenderit repellendus numquam iusto deleniti veritatis modi quibusdam dolorum tenetur expedita deserunt impedit possimus, recusandae perspiciatis ab ut facere adipisci!...</p>

        <a href="#" class="more">READ MORE</a>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="https://dummyimage.com/300x200/c4c4c4/000000}" width="100%"  alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
        <br>
        <p class="tgl">MAY 27, 2024 | <a href="#">consectetuer</a></p>
        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officiis reprehenderit repellendus numquam iusto deleniti veritatis modi quibusdam dolorum tenetur expedita deserunt impedit possimus, recusandae perspiciatis ab ut facere adipisci!...</p>

        <a href="#" class="more">READ MORE</a>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="https://dummyimage.com/300x200/c4c4c4/000000" width="100%"  alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
        <br>
        <p class="tgl">MAY 27, 2024 | <a href="#">consectetuer</a></p>
        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officiis reprehenderit repellendus numquam iusto deleniti veritatis modi quibusdam dolorum tenetur expedita deserunt impedit possimus, recusandae perspiciatis ab ut facere adipisci!...</p>

        <a href="#" class="more">READ MORE</a>
    </div>
    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
        <a href="#" class="my-3"><img src="https://dummyimage.com/300x200/c4c4c4/000000}" width="100%"  alt="" class="mb-4"> </a>
        <br>
        <a class="judul">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
        <br>
        <p class="tgl">MAY 27, 2024 | <a href="#">consectetuer</a></p>
        <p class="isi">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem officiis reprehenderit repellendus numquam iusto deleniti veritatis modi quibusdam dolorum tenetur expedita deserunt impedit possimus, recusandae perspiciatis ab ut facere adipisci!...</p>

        <a href="#" class="more">READ MORE</a>
    </div>



  </div>
    <div class="next">
        <a href="#"><i class="fa-solid fa-angles-left" style="color: #4449E0; margin-right: 5px;"></i>Older Entries</a>
    </div>
</div>

<!-- akhir berita -->



@endsection
