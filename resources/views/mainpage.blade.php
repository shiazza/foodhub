<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodHub. - Buku Masakan</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="{{ ('/css/app.css') }}">
    @include('compon.navbar')
</head>
<body>
  <div class="container">
    <section class="hero">
      <div class="title-lie">
        <div class="lie-lie">
        <h1>FoodHub</h1><h1 class="dot-lie">.</h1></div>
        </div>
        <p class="desc-lie">Cari resep, punya resep disini tempatnya!</p>
    </section>  
      <div class="row height d-flex justify-content-center align-items-center">
        <div class="col">
        <div class="bg">
      <img src="/assets/bg/bgvige_home.svg" alt="bg" class="bgvige_home">
        </div>
          <div class="search-container">
            <input type="text" class="form-control form-input border-dark search-input search-container" placeholder="Ketik buat cari resep...">
            <img src="/assets/icon/Icon.svg" width="20" height="20" alt="Search Icon" class="search-icon">
          </div>    
            </div>
              </div>
                  <!-- Carousel -->
                  <div class="carousel">
                  <iframe src="card" width="864px" height="333px">Your browser isn't compatible</iframe>
                    <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  </a>
                  <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  </a>
               </div>
               <!-- End Carousel -->
                <div class="content">
                  <div class="con-title">
                    <h1>Apa isi Kulkasmu?</h1>
                    <p>Yuk, coba cek menu ini!</p>
                    <div class="category">
                      <a href="#" class="category-link">Ikan</a>
                      <a href="#" class="category-link">Daging Sapi</a>
                      <a href="#" class="category-link">Ayam</a>
                      <a href="#" class="category-link">Bayam</a> 
                      <a href="#" class="category-link">Nasi</a>  
                      <a href="#" class="category-link">Kue Basah</a>  
                    </div>
                    <div class="warp-card">
                      @foreach($menus as $menu)
                      <div class="card" style="width: 18rem;">
                          <div class="love">
                              <form action="{{ route('likeMenu', $menu->id) }}" method="POST">
                                  @csrf
                                  <button type="submit" class="btn-like">
                                      <img src="/assets/icon/Heart.svg" alt="Like" />
                                  </button>
                              </form>
                          </div>
                          <img class="card-img-top" src="{{ $menu->thumb }}" alt="{{ $menu->title }}">
                          <div class="card-body">
                              <h5 class="card-title">{{ $menu->title }}</h5>
                              <p class="card-text">{{ Str::limit($menu->descrip, 100) }}</p>
                              <div class="bottom-card">
                                  <img src="/assets/pfp/Pepe.com.jpg" alt="pfp" class="pfp">
                                  <div class="creator-info">
                                      <p><small><strong>{{ $menu->creator->username }}</strong></small></p>
                                      <p class="tgl"><small>{{ $menu->created_at->format('d M Y') }}</small></p>
                                  </div>
                                  <a href="{{ route('menu.show', $menu->id) }}" class="btn btn-primary">View Recipe</a>
                              </div>
                          </div>
                      </div>
                @endforeach                       
	      </button>
      </div>
    </div>
  </div>  
</div>
    </div>
</main>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>