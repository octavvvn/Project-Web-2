<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PitStop Garage</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- custom css link -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

  <!-- HEADER -->
  <header class="header" data-header>
    <div class="container">
      <div class="overlay" data-overlay></div>
      <a href="#" class="logo">
        <img src="https://i.pinimg.com/564x/78/03/b4/7803b4ccbcfbe14b14392e33fd2892f9.jpg" width="60px" height="60px" alt="Ridex logo">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">
          <li>
            <a href="#about" class="navbar-link" data-nav-link>About</a>
          </li>
          <li>
            <a href="#featured-car" class="navbar-link" data-nav-link>Service cars</a>
          </li>
          <li>
            <a href="#mechanics" class="navbar-link" data-nav-link>Meet Our Mechanics</a>
          </li>
          <li>
            <a href="#blog" class="navbar-link" data-nav-link>Contact</a>
          </li>
        </ul>
      </nav>

      <div class="header-actions">
        @guest
        <a href="{{ route('login') }}" class="btn" aria-labelledby="aria-label-txt">
          <ion-icon name="car-outline"></ion-icon>
          <span id="aria-label-txt">Login</span>
        </a>
        @else
        <a href="{{ route('dashboard') }}" class="btn" aria-labelledby="aria-label-txt">
          <ion-icon name="car-outline"></ion-icon>
          <span id="aria-label-txt">Dashboard</span>
        </a>
        <a href="{{ route('logout') }}" class="btn user-btn" aria-label="Profile" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <ion-icon name="person-outline"></ion-icon>
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        @endguest
        <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>
      </div>
    </div>
  </header>

  <main>
    <article>

      <!-- HERO -->
      <section class="section hero" id="home">
        <div class="container">
          <div class="hero-content">
            <h2 class="h1 hero-title">PitStop<br> Garage Service </h2>
            <p class="hero-text">
              Your one-stop solution for all car services              
            </p>
          </div>
          <div class="hero-banner">
            <img src="https://i.pinimg.com/564x/d5/2e/2e/d52e2e19bec95bb53c63ebfbaa90ed9d.jpg" alt="Hero Banner">
          </div>
        </div>
      </section>

      <!-- About -->
      <section class="about" id="about">
        <h2 class="about-title">About</h2>
        <div class="container">
          <div class="about-card">
            <h3>PitStop Garage</h3>
            <p>PitStop Garage, your premier destination for all car service needs. Our experienced team provides exceptional care using the latest tools, handling everything from routine maintenance to complex repairs.</p>
          </div>
          <div class="about-card">
            <h3>Reliable Services</h3>
            <p>We prioritize reliable, efficient, and affordable services, building trust and transparency with our customers. Choose PitStop Garage for skilled and dedicated care, ensuring your vehicle stays in excellent condition.</p>
          </div>
          <div class="about-card">
            <h3>Our Expertise</h3>
            <p>Our team consists of highly trained professionals with years of experience in the automotive industry. We are committed to providing the best service and ensuring customer satisfaction.</p>
          </div>
        </div>
      </section>

      <!-- Featured Car -->
      <section class="featured-car" id="featured-car">
        <h2 class="car-title">Car Repair List</h2>
        <div class="container">
          <div class="title-wrapper">
            <a href="#" class="featured-car-link">
              <span>View more</span>
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
          </div>
          <ul class="featured-car-list">
            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="https://i.pinimg.com/564x/1b/a5/4e/1ba54ef689aff68f0c7412576998bd6b.jpg" alt="Toyota RAV4 2021" loading="lazy" width="440" height="300" class="w-100">
                </figure>
                <div class="card-content">
                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Toyota RAV4</a>
                    </h3>
                    <data class="year" value="2021">2021</data>
                  </div>
                  <ul class="card-list">
                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">1 People</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Hybrid</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">Tune-up mesin</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Automatic</span>
                    </li>
                  </ul>
                  <div class="card-price-wrapper">
                    <p class="card-price">
                      <strong>Rp.5.000.000.00</strong> <br> 1 Month Repair
                    </p>
                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn">Order Sekarang</button>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="https://i.pinimg.com/564x/fe/f0/66/fef0668c8504964a6cfe552e6c0c5be3.jpg" alt="BMW 3 Series 2019" loading="lazy" width="440" height="300" class="w-100">
                </figure>
                <div class="card-content">
                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">BMW 3 Series</a>
                    </h3>
                    <data class="year" value="2019">2019</data>
                  </div>
                  <ul class="card-list">
                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">1 People</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Gasoline</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">Wheel Alignment</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Automatic</span>
                    </li>
                  </ul>
                  <div class="card-price-wrapper">
                    <p class="card-price">
                      <strong>Rp.21.000.000.00</strong> <br> 2-week fix
                    </p>
                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn">Order now</button>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="https://i.pinimg.com/564x/2e/77/e7/2e77e728aded124d02b347d37ceab7d3.jpg" alt="Volkswagen T-Cross 2020" loading="lazy" width="440" height="300" class="w-100">
                </figure>
                <div class="card-content">
                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Volkswagen T-Cross</a>
                    </h3>
                    <data class="year" value="2020">2020</data>
                  </div>
                  <ul class="card-list">
                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">1 People</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Gasoline</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">Poles dan waxing</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Automatic</span>
                    </li>
                  </ul>
                  <div class="card-price-wrapper">
                    <p class="card-price">
                      <strong>Rp. 11.200.000.00</strong> <br> 1-week fix
                    </p>
                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn">Order now</button>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="https://i.pinimg.com/736x/f4/3c/31/f43c31a129052db3c449c56e2154a142.jpg" alt="Audi R8 V10 Coupe" loading="lazy" width="440" height="300" class="w-100">
                </figure>
                <div class="card-content">
                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">Audi R8 V10 Coupe</a>
                    </h3>
                    <data class="year" value="2020">2020</data>
                  </div>
                  <ul class="card-list">
                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">1 People</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Gasoline</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">Pemeriksaan dan penggantian filter AC</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Automatic</span>
                    </li>
                  </ul>
                  <div class="card-price-wrapper">
                    <p class="card-price">
                      <strong>Rp.25.300.000.00</strong> <br> 4-day fix
                    </p>
                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn">Order now</button>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="https://i.pinimg.com/736x/10/ed/1d/10ed1defdfad4493828094a55895ff97.jpg" alt="BMW 4 Series GTI 2021" loading="lazy" width="440" height="300" class="w-100">
                </figure>
                <div class="card-content">
                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">BMW 4 Series GTI</a>
                    </h3>
                    <data class="year" value="2021">2021</data>
                  </div>
                  <ul class="card-list">
                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">1 People</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Gasoline</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">Perbaikan sistem ABS (Anti-lock Braking System)</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Automatic</span>
                    </li>
                  </ul>
                  <div class="card-price-wrapper">
                    <p class="card-price">
                      <strong>Rp.20.000.000.00</strong> <br> 5-day fix
                    </p>
                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn">Order now</button>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="featured-car-card">
                <figure class="card-banner">
                  <img src="https://i.pinimg.com/564x/00/6f/e9/006fe992ef1f954c8a735e1e16cfa660.jpg" alt="BMW 4 Series 2019" loading="lazy" width="440" height="300" class="w-100">
                </figure>
                <div class="card-content">
                  <div class="card-title-wrapper">
                    <h3 class="h3 card-title">
                      <a href="#">BMW 4 Series</a>
                    </h3>
                    <data class="year" value="2019">2019</data>
                  </div>
                  <ul class="card-list">
                    <li class="card-list-item">
                      <ion-icon name="people-outline"></ion-icon>
                      <span class="card-item-text">1 People</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="flash-outline"></ion-icon>
                      <span class="card-item-text">Gasoline</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="speedometer-outline"></ion-icon>
                      <span class="card-item-text">Pemeriksaan dan penggantian shock absorber</span>
                    </li>
                    <li class="card-list-item">
                      <ion-icon name="hardware-chip-outline"></ion-icon>
                      <span class="card-item-text">Automatic</span>
                    </li>
                  </ul>
                  <div class="card-price-wrapper">
                    <p class="card-price">
                      <strong>Rp.15.500.000.00</strong> <br> 2-week fix
                    </p>
                    <button class="btn fav-btn" aria-label="Add to favourite list">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
                    <button class="btn">Order now</button>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- GET START -->
      <section class="get-start">
        <h2 class="car-title">Get Your Car Serviced in 4 Easy Steps</h2>
        <br>
        <div class="container">
          <ul class="get-start-list">
            <li>
              <div class="get-start-card">
                <div class="card-icon icon-1">
                  <ion-icon name="person-add-outline"></ion-icon>
                </div>
                <h3 class="card-title">Buat Profil</h3>
                <p class="card-text">
                  "Buat profil Anda di platform kami untuk memulai proses servis mobil. Dengan membuat profil, Anda dapat mengakses berbagai layanan kami, melacak riwayat servis, dan mendapatkan penawaran eksklusif. Jangan ragu untuk memulai karena prosesnya cepat dan mudah!"
                </p>
                <br><br><br><br>
                <a href="#" class="card-link">Mulai Sekarang</a>
              </div>
            </li>

            <li>
              <div class="get-start-card">
                <div class="card-icon icon-2">
                  <ion-icon name="car-outline"></ion-icon>
                </div>
                <h3 class="card-title">Beritahu Kami Mobil Anda</h3>
                <p class="card-text">
                  Beritahu kami jenis mobil yang Anda miliki dan layanan apa yang Anda butuhkan. Apakah itu perawatan rutin, perbaikan khusus, atau peningkatan performa, kami siap membantu. Dengan informasi ini, kami dapat memberikan rekomendasi terbaik dan menyesuaikan layanan sesuai kebutuhan Anda."
                </p>
                <br><br>
                <a href="#" class="card-link">Mulai Sekarang</a>
              </div>
            </li>

            <li>
              <div class="get-start-card">
                <div class="card-icon icon-3">
                  <ion-icon name="person-outline"></ion-icon>
                </div>
                <h3 class="card-title">Cocokkan dengan Teknisi</h3>
                <p class="card-text">
                  "Kami akan mencocokkan Anda dengan teknisi terbaik dan paling berpengalaman yang sesuai dengan kebutuhan servis mobil Anda. Teknisi kami telah melalui pelatihan intensif dan memiliki sertifikasi yang diperlukan untuk memastikan mobil Anda mendapatkan perawatan terbaik. Nikmati kemudahan mendapatkan layanan dari yang terbaik di bidangnya."
                </p>
                <a href="#" class="card-link">Mulai Sekarang</a>
              </div>
            </li>

            <li>
              <div class="get-start-card">
                <div class="card-icon icon-4">
                  <ion-icon name="card-outline"></ion-icon>
                </div>
                <h3 class="card-title">Lakukan Kesepakatan</h3>
                <p class="card-text">
                  "Setelah memilih teknisi yang tepat, lakukan kesepakatan untuk memulai servis mobil Anda. Kami memastikan proses transaksi berjalan lancar, aman, dan transparan. Dapatkan harga terbaik dan layanan berkualitas tanpa perlu khawatir. Percayakan mobil Anda kepada kami dan nikmati hasilnya."
                </p>
                <br><br><br>
                <a href="#" class="card-link">Mulai Sekarang</a>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <!-- MECHANICS -->
      <section class="mechanics" id="mechanics">
        <h2 class="testimonios-title">Meet Our Mechanics</h2>
        <div class="testimonios-content wrapper">
          <div class="card">
            <img src="https://i.pinimg.com/236x/40/c5/2d/40c52da2c014d773367ad145c627e949.jpg" alt="Jodie">
            <div>
              <h3>Jodie</h3>
              <p>Expert Mechanic with 10 years of experience in car maintenance and repair.</p>
            </div>
          </div>
          <div class="card">
            <img src="https://i.pinimg.com/564x/14/29/ed/1429ed2ab6bf89e214d2a11ccefc5a35.jpg" alt="Abra">
            <div>
              <h3>Abra</h3>
              <p>Skilled Mechanic specializing in diagnostics and complex car repairs.</p>
            </div>
          </div>
        </div>
      </section>
      <br>
      <br>
      <br>

      <!-- BLOG -->
      <section class="blog" id="blog">
        <h2 class="blog-title">Contact Us</h2>
        <div class="container">
          <ul class="blog-list has-scrollbar">
            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img src="https://i.pinimg.com/564x/0e/62/bb/0e62bb89e61155bfde590c40ce6ebf28.jpg" alt="Opening of new offices of the company" loading="lazy" class="w-100">
                  </a>
                  <a href="#" class="btn card-badge">Maps</a>
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#">Kunjungi salah satu dari lokasi kami yang mudah diakses untuk mendapatkan layanan servis terbaik bagi mobil Anda</a>
                  </h3>
                  <div class="card-meta">
                    <div class="publish-date">
                      <time datetime="2022-01-14">📞 Telepon: <br> +62 666 777 8888 <br>✉️ Email: feedback@pitstopgarage.com</time>
                    </div>
                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                      <data value="114">114</data>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img src="https://i.pinimg.com/564x/6f/f1/39/6ff1397efee1315f6f851edfd8830ab8.jpg" alt="What cars are most vulnerable" loading="lazy" class="w-100">
                  </a>
                  <a href="#" class="btn card-badge">Facebook</a>
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#">Kunjungi salah satu Sosial Media Kami </a>
                  </h3>
                  <br><br><br><br>
                  <div class="card-meta">
                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="2022-01-14">📞 Telepon: <br> +62 666 777 8888 <br>✉️ Email: feedback@pitstopgarage.com</time>
                    </div>
                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                      <data value="114">114</data>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img src="https://i.pinimg.com/564x/24/f7/ff/24f7ffeb63f92fd374d510dc63d1dc58.jpg" alt="Statistics showed which average age" loading="lazy" class="w-100">
                  </a>
                  <a href="#" class="btn card-badge">Instagram</a>
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#">Kunjungi salah satu Media Sosial Kami</a>
                  </h3>
                  <br><br><br><br>
                  <div class="card-meta">
                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="2022-01-14">📞 Telepon: <br> +62 666 777 8888 <br>✉️ Email: feedback@pitstopgarage.com</time>
                    </div>
                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                      <data value="114">114</data>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="blog-card">
                <figure class="card-banner">
                  <a href="#">
                    <img src="https://i.pinimg.com/564x/cd/48/57/cd4857297d0e2a9be8b610b646e825f6.jpg" alt="What´s required when renting a car?" loading="lazy" class="w-100">
                  </a>
                  <a href="#" class="btn card-badge">Twitter</a>
                </figure>
                <div class="card-content">
                  <h3 class="h3 card-title">
                    <a href="#">Kunjungi salah satu Sosial Media Kami</a>
                  </h3>
                  <br><br><br><br>
                  <div class="card-meta">
                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>
                      <time datetime="2022-01-14">📞 Telepon: <br> +62 666 777 8888 <br>✉️ Email: feedback@pitstopgarage.com</time>
                    </div>
                    <div class="comments">
                      <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                      <data value="114">114</data>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </article>
  </main>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <div class="footer-brand">
          <a href="#" class="logo">
            <img src="c:\Users\Haikal\Downloads\download (2).jpeg" alt="PitStop Garage">
          </a>
          <p class="footer-text">
            Cari layanan servis mobil terbaik di Indonesia. Dengan berbagai pilihan layanan dari perawatan rutin hingga perbaikan besar, PitStop Garage menawarkan solusi terbaik untuk kebutuhan mobil Anda
          </p>
        </div>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Perusahaan</p>
          </li>
          <li>
            <a href="#" class="footer-link">Home</a>
          </li>
          <li>
            <a href="#" class="footer-link">Tentang Kami</a>
          </li>
          <li>
            <a href="#" class="footer-link">Service Car</a>
          </li>
          <li>
            <a href="#" class="footer-link">Kontak</a>
          </li>
        </ul>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Dukungan</p>
          </li>
          <li>
            <a href="#" class="footer-link">Pusat bantuan</a>
          </li>
          <li>
            <a href="#" class="footer-link">Ajukan pertanyaan</a>
          </li>
          <li>
            <a href="#" class="footer-link">Kebijakan Privasi</a>
          </li>
          <li>
            <a href="#" class="footer-link">Syarat & Ketentuan</a>
          </li>
        </ul>
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Cabang di Indonesia</p>
          </li>
          <li>
            <a href="#" class="footer-link">Jakarta</a>
          </li>
          <li>
            <a href="#" class="footer-link">Yogyakarta</a>
          </li>
          <li>
            <a href="#" class="footer-link">Surabaya</a>
          </li>
          <li>
            <a href="#" class="footer-link">Bogor</a>
          </li>
          <li>
            <a href="#" class="footer-link">Bali</a>
          </li>
          <li>
            <a href="#" class="footer-link">Bekasi</a>
          </li>
          <li>
            <a href="#" class="footer-link">Solo</a>
          </li>
          <li>
            <a href="#" class="footer-link">Bandung</a>
          </li>
        </ul>
      </div>

      <div class="footer-bottom">
        <ul class="social-list">
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-skype"></ion-icon>
            </a>
          </li>
          <li>
            <a href="#" class="social-link">
              <ion-icon name="mail-outline"></ion-icon>
            </a>
          </li>
        </ul>
        <p class="copyright">
          &copy; 2022 <a href="#">PitStop Garage</a>. All Rights Reserved
        </p>
      </div>
    </div>
  </footer>

  <!-- custom js link -->
  <script src="./assets/js/script.js"></script>

  <!-- ionicon link -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
