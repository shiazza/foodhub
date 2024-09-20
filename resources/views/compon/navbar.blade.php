<link rel="stylesheet" type="text/css" href="{{ ('/css/nav.css') }}">
<body>
    <div>
        <main>
            <style>
                /* Navigation */
                .navbar {
                    background-color: white;
                    display: flex;
                    justify-content: space-between;
                    position: fixed;
                    top: 0;
                    width: 100%;
                    z-index: 1000;
                }

                .logo {
                    margin-top: 10px;
                    margin-left: 30px;
                    display: flex;
                }

                .logo p {
                    margin-left: 5px;
                    font-family: 'Lobster', sans-serif;
                    font-size: 28px;
                }

                .logo .dot {
                    font-family: 'Lobster', sans-serif;
                    font-size: 28px;
                    color: #92D050;
                }

                .nav-button {
                    margin-right: 20px;
                    padding: 4px;
                }

                .nav-button a {
                    text-decoration: none;
                    background-color: white;
                    padding: 10px 15px;
                    margin-right: 5px;
                    border-style: solid;
                    border-width: 2px;
                    border-radius: 25px;
                }
            </style>

            <div class="navbar">
                <div class="logo">
                    <img src="/assets/Logo.png" width="50" height="55" alt="FoodHub. Logo">
                    <p>FoodHub</p>
                    <div class="dot">.</div>
                </div>

                <div class="nav-button">
                    @guest
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color: #92D050">Daftar</a>
                        @endif
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" style="color: #EE8640">Masuk</a>
                        @endif
                    @else
                        <!-- Tombol Logout jika user sudah login -->
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </main>
    </div>
</body>
