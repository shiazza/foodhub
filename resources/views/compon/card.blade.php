<!-- Carousel -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<body>
  <style>
        /* Full-screen Card */
        .card {
            border: none;
            font-family: 'Inter', sans-serif;
            border-radius: 20px;
            background-color: #f8f8f8;
            width: 100vw; /* Full width */
            height: 100vh; /* Full height */
        }

        .card-body {
            background-color: #FFD3C9;
            border-radius: 35px;
            padding: 25px;
            position: relative;
            display: flex;
            align-items: center;
            height: 80%;
            justify-content: center;
        }

        .text-content{
            width: 50%; 
            padding-right: 20px;
        }

        .card-img-right {
            transform: translateX(33px);
            width: 48%;
            height: 117%; 
            object-fit: cover; 
            border-radius: 35px;
        }

        .badge {
            background-color: #FFFFFF;
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            border-radius: 10px;
            color: black;
            margin-bottom: 10px;
            padding: 5px 10px;
        }

        .category{
            display: flex;
            width: 80px;
            height: 30px;
            font-size: 14px;
            background-color: #0000000e;
            border-radius: 20px;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .bottom-card {
            display: flex;
            align-items: center;
            width: 100%;    
        }

        .creator-info {
            margin-left: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .creator-info p {
            margin: -3px 0;
        }

        .pfp {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .Lihatrsp {
            display: flex;
            align-items: center;
            gap: 8px; 
            margin-left: auto;
            border-radius: 20px;
        }

        .Lihatrsp a {
            text-decoration: none;
            color: white; 
        }

        .Lihatrsp img {
            width: 20px;
            height: 20px;
        }

        p{
            margin-bottom: 0rem !important;
        }

        .cat{
            width: 20px;
        }
  </style>
                  <div class="card">
                    <div class="card-body">
                      <div class="text-content">
                        <span class="badge">📜Resep Pilihan</span>
                        <h3>Ayam Geprek Sambal Goreng</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        <div class="category">
                          <img src="/assets/icon/ForkKnife.svg" alt="cat" class="cat"><p>Ayam</p>
                        </div>
                        <div class="bottom-card">
                          <img src="/assets/pfp/Pepe.com.jpg" alt="pfp" class="pfp">
                          <div class="creator-info">
                              <p><small><strong>RYUTA</strong></small></p>
                              <p class="tgl"><small>15 Maret 2022</small></p>
                          </div>
                          <div class="Lihatrsp btn btn-dark">
                              <a href="#">Lihat Resep</a>
                              <img src="/assets/icon/PlayCircle.svg">
                          </div>
                        </div>
                      </div>
                      <img src="/assets/upload/ayam-gprek.webp" class="card-img-right" alt="Ayam Geprek">
                    </div>
                  </div>
  </body>