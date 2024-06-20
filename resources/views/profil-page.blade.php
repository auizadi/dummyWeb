@extends('layout.v_template')
@section('title', 'Profil | Masjid Mujahidin')

@section('css')
<link rel="stylesheet" href="{{asset('styleCSS/profil-style.css')}}">
@endsection
@section('content')






  <div class="container-fluid">
    <div class="row align-self-center justify-content-center">
      <div class="col-lg-6 col-md-12 col-sm-12 p-5 order-md-2 order-lg-1 order-2">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p id="sub">Aenean commodo ligula eget dolor. Aenean massa.</p>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 order-md-1 order-lg-2 order-1" >
        <img src="{{ asset('img/bahan.jpeg') }}" alt="" class="img-responsive">
      </div>
    </div>
  </div>

  <!-- deskripsi -->
  <div class="condes container-md">
    <div class="row justify-content-center g-5">
      <div class="col-12 col-lg-6">
        <h4 class="ijo my-4 text-uppercase" style="letter-spacing: 3px;" id="ijo1">Lorem ipsum</h4>
        <h2 class="my-3 display-5"  id="story">Lorem ipsum dolor</h2>
        <p class="text">
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
        </p>
        <p class="text">
          Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
        </p>
        <p class="text">
          Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
        </p>
        <p class="text">
          Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.
        </p>
        <p class="text">
          Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. 
          Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. 
          Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. 
          Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. 
          Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis.
           Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, 
           auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, 
           posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis 
           vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. 
           Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; 
           Sed aliquam, nisi quis porttitor congue, elit erat euismod orci.
        </p>
      </div>
      <div class="col-12 col-lg-6 text-center">
        <img src="{{ asset('img/profile.png') }}" alt="Profile" class="img-fluid">
      </div>
    </div>
  </div>

  <!-- akhir deskripsi -->

  <!-- penjelasan -->
  <div class="kolom-3 container-md mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-10 text-center mb-4 fade-in">
        <img src="https://dummyimage.com/100x100/c4c4c4/000000" alt="" class="my-3 img-fluid">
        <h5 class="fw-bold text-dark">Lorem ipsum dolor sit</h5>
        <p class="text-deskripsi">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium.</p>
      </div>

      <div class="col-lg-4 col-md-10 text-center mb-4 fade-in">
        <img src="https://dummyimage.com/100x100/c4c4c4/000000" alt="" class="my-3 img-fluid">
        <h5 class="fw-bold text-dark">Lorem ipsum dolor sit</h5>
        <p class="text-deskripsi">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium.</p>
      </div>

      <div class="col-lg-4 col-md-10 text-center mb-4 fade-in">
        <img src="https://dummyimage.com/100x100/c4c4c4/000000" alt="" class="my-3 img-fluid">
        <h5 class="fw-bold text-dark">Lorem ipsum dolor sit</h5>
        <p class="text-deskripsi">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium.</p>
      </div>
    </div>
  </div>


  <!-- akhir penjelasan -->

  <!-- sekilas -->
  <div class="container rounded-3 bg-light my-4 shadow-lg p-4 mb-5">
    <div class="row">
      <div class="col-12 col-lg-6">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/wtBr_Taex_0?si=LZXDC2HeOQ3Clg63" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="col-12 col-lg-6">
        <h4 class="ijo my-2 fw-bold text-uppercase">Lorem ipsum</h4>
        <p class="display-4" id="story">Lorem ipsum</p>
        <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
      </div>
    </div>
    <div class="row my-4">
      <div class="col-6 col-md-6 text-center">
        <div class="counter">
          <p class="angka my-3 display-3 fw-semibold"><span data-count="400">0</span>+</p>
          <p class="my-3 text-secondary text-uppercase">Lorem ipsum</p>
        </div>
      </div>
      <div class="col-6 col-md-6 text-center">
        <div class="counter">
          <p class="angka my-3 display-3 fw-semibold"><span data-count="1000">0</span>+</p>
          <p class="my-3 text-secondary text-uppercase">Lorem</p>
        </div>
      </div>
      <div class="col-6 col-md-6 text-center">
        <div class="counter">
          <p class="angka my-3 display-3 fw-semibold"><span data-count="50">0</span>+</p>
          <p class="my-3 text-secondary text-uppercase">Lorem ipsum</p>
        </div>
      </div>
      <div class="col-6 col-md-6 text-center">
        <div class="counter">
        <p class="angka my-3 display-3 fw-semibold"><span data-count="36">0</span>+</p>
        <p class="my-3 text-secondary text-uppercase">Lorem ipsum</p>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir sekilas -->



  <script src="{{ asset('JSAsset/profil.js') }}"></script>

  <!-- akhir JS -->


@endsection
