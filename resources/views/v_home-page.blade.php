@extends('layout.v_template')
@section('content')

{{-- hero --}}
<div class="container-fluid">
    <div class="row">
        <section style="position: relative; height: 100vh; overflow: hidden;">
            <div style="background-image: linear-gradient(180deg, rgba(43, 135, 218, 0.6) 0%, #29c4a9 100%), url('https://dummyimage.com/1400px × 1060 /c4c4c4/000000'); background-size: cover; background-position: center center; width: 100%; height: 100vh; position: absolute; left:0;">
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" style="width: 100vw;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="p-2">
                                <h1 class="text-light fw-bold">Selamat Datang di Website</h1>
                                <h1 class="text-light fw-bold"></h1>
                                <div class="col-md-8">
                                    <h4 class="text-light fw-semibold pt-4 pb-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur</h4> 
                                </div>
                                <div class="button-effect">
                                    <a href="" class="btn btn-light effect effect-2 text-dark fw-bold">Take The Tour</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

{{-- sambutan --}}
<div class="container pt-5">
    <div class="row">
        <div class="col-md-8">
            <h5 class="text-success text-uppercase fw-bold">Lorem ipsum</h5>
            <h2 class="text-dark text-uppercase fw-bold pt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo</h2>
            <p class="text-secondary pt-2"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et</br>
            </br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa.
            </br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.</br>
            </br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit : </br>
            <ol class="custom-ol">
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</li>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</li>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</li>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</li>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</li>
            </ol>
            </br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit :
            <ol class="custom-ol pt-2">
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</li>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</li>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</li>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</li>
            </ol>
            </p>
        </div>
        <div class="col-md-4 text-center">
            <img src="https://dummyimage.com/400x400/c4c4c4/000000" alt="" style="width: 400px;">
            <h3 class="text-dark fw-bold pt-3">Lorem ipsum dolor</h3>
            <h5 class="text-secondary fw-semibold"><em>Lorem ipsum dolor sit amet</em></h5>
        </div>
        <div class="col-md-12">
            <p class="text-secondary">
                Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer.</br> </br>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            </p>
        </div>
    
    {{--  --}}
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mb-2">
                <div class="text-center p-3">
                    <img src="https://dummyimage.com/100x100/c4c4c4/000000" alt="" class="my-3 mx-auto d-block" style="width:100px; height:100px;">
                    <div>
                        <h5 class="text-dark fw-bold justify">Lorem ipsum dolor sit</h5>
                        <p class="text-secondary justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4 mb-2">
                <div class="text-center p-3">
                    <img src="https://dummyimage.com/100x100/c4c4c4/000000" alt="" class="my-3 img-fluid mx-auto d-block">
                    <div>
                        <h5 class="text-dark fw-bold justify">Lorem ipsum dolor sit</h5>
                        <p class="text-secondary justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4 mb-2">
                <div class="text-center p-3">
                    <img src="https://dummyimage.com/100x100/c4c4c4/000000" alt="" class="my-3 img-fluid mx-auto d-block">
                    <div>
                        <h5 class="text-dark fw-bold justify">Lorem ipsum dolor sit</h5>
                        <p class="text-secondary ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium.</p>
                    </div>
                </div>
            </div>
        </div>

        {{--  --}}
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h5 class="text-success text-uppercase fw-bold text-center">Tabel Informasi</h5>
                <h2 class="text-dark text-uppercase fw-bold text-center pt-3 pb-5">Lorem ipsum dolor sit amet</h2>
                <div style="position: relative; overflow: hidden; padding-top: 56.25%;">
                    <iframe loading="lazy" src="https://loremipsum.io/" style="position: absolute; top: 0; left: 0; width: 100%; height: 700px; border: none;"></iframe>
                </div>
            </div>
        </div>

        {{--  --}}
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="text-dark text-uppercase fw-bold text-center pb-3 pt-5">LOREM IPSUM DOLOR SIT AMET</h2>
                <h4 class="text-dark fw-semibold text-center pb-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</h2>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col mb-5">
                          <div class="card h-100 p-3 mb-2" style="margin: 30px;">
                            <img src="https://dummyimage.com/315x196/c4c4c4/000000" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title fw-semibold text-dark"><a href="/detailberita" class="text-decoration-none">Lorem ipsum dolor sit amet</a></h5>
                              <p class="card-text fw-semibold ">Lorem ipsum dolor sit amet | Jun 1, 2024 | consectetuer</p>
                              <p class="card-text"></p>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100 p-3 mb-2" style="margin: 30px;">
                              <img src="https://dummyimage.com/315x196/c4c4c4/000000" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title fw-semibold text-dark"><a href="/detailberita" class="text-decoration-none">Lorem ipsum dolor sit amet</a></h5>
                              <p class="card-text fw-semibold ">Lorem ipsum dolor sit amet | May 27, 2024 | consectetuer</p>
                              <p class="card-text fw-semibold ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
                              </div>
                            </div>
                          </div>
                        <div class="col mb-5">
                          <div class="card h-100 p-3 mb-2" style="margin: 30px;">
                            <img src="https://dummyimage.com/315x196/c4c4c4/000000" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title fw-semibold text-dark"><a href="/detailberita" class="text-decoration-none">Lorem ipsum dolor sit amet</a></h5>
                              <p class="card-text fw-semibold ">Lorem ipsum dolor sit amet | May 8, 2024 | consectetuer</p>
                              <p class="card-text fw-semibold ">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus...</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="button-effect pb-5 pt-5">
                            <a href="" class="btn btn-primary effect effect-3"><h5 class="fw-semibold">Lihat Lainnya</h5></a>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</div>    


@endsection