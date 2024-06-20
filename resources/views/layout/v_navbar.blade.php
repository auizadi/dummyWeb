<nav class="navbar navbar-expand-lg bg-body-tertiary p-4">
  <div class="container-fluid">
    <img src="https://dummyimage.com/50x50/c4c4c4/000000" alt="" width="50" />
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end mt-2" id="navbarSupportedContent">
      <ul class="nav navbar-nav align-items-center gap-3">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profil">Profil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/bidang" role="button"> Bidang </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Dakwah & Ketakmiran</a></li>
            <li class="nav-item dropstart">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pendidikan</a>
              <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="#">KBTK</a></li>
                  <li class="dropdown-item"><a href="#">KBRA</a></li>
                  <li class="dropdown-item"><a href="#">SD</a></li>
                  <li class="dropdown-item"><a href="#">SD</a></li>
                  <li class="dropdown-item"><a href="#">SMP</a></li>
                  <li class="dropdown-item"><a href="#">SMA</a></li>
              </ul>
          </li>
          <li class="nav-item dropstart">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ekonomi</a>
              <ul class="dropdown-menu">
                  <li class="dropdown-item"><a href="/donasionline">Lembaga Amal</a></li>
                  <li class="dropdown-item"><a href="#">UBO</a></li>
                  <li class="dropdown-item"><a href="#">Suara Plus</a></li>
              </ul>
          </li>
          <li><a class="dropdown-item" href="#">Kesekretariatan</a>
          </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kontak">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const currentPath = window.location.pathname;
    const navbarLinks = document.querySelectorAll("#navbarSupportedContent .nav-link");

    navbarLinks.forEach(link => {
        if (link.getAttribute("href") === currentPath) {
            link.classList.add("active");
        }
    });
});

</script> 

  


  
