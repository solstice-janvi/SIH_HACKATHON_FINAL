<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Minetech - solution for futuristic growth</title>
  <meta name="title" content="minetech">
  <meta name="description" content="This is a personal portfolio html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/require.css">
  <link rel="stylesheet" href="./assets/css/main.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" href="./assets/images/hero-banner.png">

</head>

<body>

  <!-- 
    - #PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="preloader-circle"></div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="dump-truck.png" width="80" height="25" alt="minetech">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="label-lg navbar-link has-after active">Home</a>
          </li>

          <li class="navbar-item">
            <a href="./service.html" class="label-lg navbar-link has-after">technology</a>
          </li>

          <li class="navbar-item">
            <a href="#abt" class="label-lg navbar-link has-after">about us</a>
          </li>

          <li class="navbar-item">
            <a href="./contact.html" class="label-lg navbar-link has-after">Contact</a>
          </li>
          

        </ul>
      </nav>

      <a href="index.php" class="btn btn-primary">login</a>

      <button class="nav-toggle-btn" aria-label="menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">👋,project minetech </p>

            <h1 class="headline-lg">Minetech is a future of coal industry</h1>

            <p class="hero-text body-md">
              an indian company
            </p>

            <a href="#" class="btn btn-primary">Let's Start</a>

          </div>

          <figure class="hero-banner">
            <img src="pngtree-dumper-sticker-with-a-shovel-vector-png-image_6906935.png" width="900" height="900"
              alt="project mine tech " class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #CLIENT
      -->

      <section class="client" aria-label="Trusted client">
        <div class="container">

          <ul class="slider">

            <li class="slider-item">
              <img src="india.png" width="130" height="40" alt="clients" class="w-100">
            </li>

            <li class="slider-item">
              <img src="hindu.png" width="130" height="40" alt="clients" class="w-100">
            </li>

            <li class="slider-item">
              <img src="ashoka.png" width="130" height="40" alt="clients" class="w-100">
            </li>

            <li class="slider-item">
              <img src="ganesha.png" width="130" height="40" alt="clients" class="w-100">
            </li>

            <li class="slider-item">
              <img src="jawahar-circle.png" width="130" height="40" alt="clients" class="w-100">
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about me" id="abt">
        <div class="container">

          <figure class="about-banner">
            <img src="about.png" width="700" height="700" loading="lazy"
              alt="minetech" class="w-100">
          </figure>

          <div class="about-content">

            <h2 class="title-lg">Minetech solution</h2>

            <p class="body-md section-text">
            Minetech, a leading innovator in mining technology, pioneers the groundbreaking solution, LoadTrack Pro, aimed at revolutionizing large-scale mining operations. Leveraging state-of-the-art sensor networks and IoT devices, LoadTrack Pro provides shovel operators with real-time visibility into dumper load statuses, eliminating manual communication and delays. The system's intuitive interface offers comprehensive visual indicators and notifications, seamlessly integrating with existing infrastructure and ensuring compatibility with various mining site systems. LoadTrack Pro's robust design handles a vast fleet of dumpers efficiently, addressing connectivity challenges and potential disruptions while prioritizing data security through encryption, multi-level authentication, and stringent access controls. Minetech's LoadTrack Pro significantly enhances operational efficiency, minimizing downtime and optimizing resource allocation, positioning it as an invaluable asset in modernizing and streamlining mining operations.
            </p>

            <ul class="about-list">

              <li>
                <p class="list-text">
                  <strong class="strong title-md">285+</strong> Projet Completed
                </p>
              </li>

              <li>
                <p class="list-text">
                  <strong class="strong title-md">190+</strong> Happy Clients
                </p>
              </li>

            </ul>

            <div class="wrapper">
              <a href="./contact.html" class="btn btn-primary">Contact us</a>

              <a href="./portfolio.html" class="btn btn-secondary">company</a>
            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #SKILL
      -->

      <section class="section skill" aria-labelledby="skill-label">
        <div class="container">

          <div class="skill-content">

            <h2 class="section-title headline-md" id="skill-label">team's strength</h2>

            <ul class="skill-list">

              <li>
                <div class="card card-sm" style="background-color: hsl(177, 39%, 72%)">

                  <div class="card-media">
                    <ion-icon name="logo-html5"></ion-icon>
                  </div>

                  <h2 class="card-title">HTML</h2>

                </div>
              </li>

              <li>
                <div class="card card-sm" style="background-color: hsl(41, 99%, 64%)">

                  <div class="card-media">
                    <ion-icon name="logo-css3"></ion-icon>
                  </div>

                  <h2 class="card-title">CSS</h2>

                </div>
              </li>

              <li>
                <div class="card card-sm" style="background-color: hsl(19, 97%, 85%)">

                  <div class="card-media">
                    <ion-icon name="logo-react"></ion-icon>
                  </div>

                  <h2 class="card-title">js</h2>

                </div>
              </li>

              <li>
                <div class="card card-sm" style="background-color: hsl(221, 100%, 79%)">

                  <div class="card-media">
                    <ion-icon name="logo-angular"></ion-icon>
                  </div>

                  <h2 class="card-title">PHP</h2>

                </div>
              </li>

              <li>
                <div class="card card-sm" style="background-color: hsl(76, 39%, 72%)">

                  <div class="card-media">
                    <ion-icon name="logo-apple"></ion-icon>
                  </div>

                  <h2 class="card-title">Streamlit</h2>

                </div>
              </li>

              <li>
                <div class="card card-sm" style="background-color: hsl(245, 100%, 90%)">

                  <div class="card-media">
                    <ion-icon name="logo-android"></ion-icon>
                  </div>

                  <h2 class="card-title">AI/ML</h2>

                </div>
              </li>

            </ul>

          </div>

          <figure class="skill-banner">
            <img src="png-mining-industry-1.png" width="581" height="357" loading="lazy"
              alt="minetech" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta">
        <div class="container">
          <h2 class="title-lg">Intrested working with us?</h2>

          <a href="./contact.html" class="btn btn-tertiary">Contact Now</a>
        </div>
      </section>





      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section testi" aria-labelledby="testi-label">
        <div class="container">

          <h2 class="headline-md section-title text-center" id="testi-label">Our Team</h2>

          <ul class="slider">

            <li class="slider-item card-container">
              <div class="card card-lg">

                <figure class="card-media">
                  <img src="./assets/images/testi-1.jpg" width="100" height="100" loading="lazy" alt="Jennifer Lutheran"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <blockquote class="body-sm">
                    Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.
                  </blockquote>

                  <p class="client-name">Jennifer Lutheran</p>

                  <p class="client-title">CEO at pxdraft</p>

                </div>

              </div>
            </li>

            <li class="slider-item card-container">
              <div class="card card-lg">

                <figure class="card-media">
                  <img src="./assets/images/testi-2.jpg" width="100" height="100" loading="lazy" alt="Jennifer Lutheran"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <blockquote class="body-sm">
                    Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.
                  </blockquote>

                  <p class="client-name">Jennifer Lutheran</p>

                  <p class="client-title">CEO at pxdraft</p>

                </div>

              </div>
            </li>

            <li class="slider-item card-container">
              <div class="card card-lg">

                <figure class="card-media">
                  <img src="./assets/images/testi-3.jpg" width="100" height="100" loading="lazy" alt="Jennifer Lutheran"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <blockquote class="body-sm">
                    Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.
                  </blockquote>

                  <p class="client-name">Jennifer Lutheran</p>

                  <p class="client-title">CEO at pxdraft</p>

                </div>

              </div>
            </li>

            <li class="slider-item card-container">
              <div class="card card-lg">

                <figure class="card-media">
                  <img src="./assets/images/testi-4.jpg" width="100" height="100" loading="lazy" alt="Jennifer Lutheran"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <blockquote class="body-sm">
                    Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.
                  </blockquote>

                  <p class="client-name">Jennifer Lutheran</p>

                  <p class="client-title">CEO at pxdraft</p>

                </div>

                <li class="slider-item card-container">
              <div class="card card-lg">

                <figure class="card-media">
                  <img src="./assets/images/testi-4.jpg" width="100" height="100" loading="lazy" alt="Jennifer Lutheran"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <blockquote class="body-sm">
                    Dolor lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.
                  </blockquote>

                  <p class="client-name">Jennifer Lutheran</p>

                  <p class="client-title">CEO at pxdraft</p>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <ul class="social-list">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-pinterest"></ion-icon>
          </a>
        </li>

      </ul>

      <p class="text-center">&copy; 2023 copyright all right reserved</p>

    </div>
  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script type="module" src="firebase_database.js"></script>

  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>