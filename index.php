<?php

require __DIR__ . '/app/src/bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Website Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./app/assets/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./app/assets/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./app/assets/favicon/favicon-16x16.png">
  <link rel="manifest" href="./app/assets/favicon/site.webmanifest">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../../../app/assets/css/style.css">
  <link rel="stylesheet" href="../../../app/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../app/assets/vendors/css/vendor.bundle.base.css">

  <title>Get Film Official</title>
  <style>
    p {
      text-align: justify;
    }

    .carousel-item img {
      width: 100%;
      height: auto;
      object-fit: cover;
      aspect-ratio: 3 / 4;
    }

    .carousel-caption {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 10px;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <header>
    <div class="jumbotron text-center">
      <h1>Welcome to Get Film</h1>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="./app/assets/images/films/getfilm-logo.png" alt="logo-get-film-official" height="25px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#films">FILMS</a></li>
          <li class="nav-item"><a class="nav-link" href="#now-showing">NOW SHOWING</a></li>
          <li class="nav-item"><a class="nav-link" href="#top-movie">TOP MOVIE</a></li>
          <li class="nav-item"><a class="nav-link" href="#book-tickets">BOOK TICKETS</a></li>
          <li class="nav-item"><a class="nav-link" href="#about-us">ABOUT US</a></li>
        </ul>
        <a href="./public/views/login.php" class="btn btn-primary ml-3">LOGIN</a>
      </div>
    </nav>
  </header>

  <main class="container mt-5">
    <!-- Main Content -->
    <div class="row">
      <div class="col-md-8">
        <section id="films">
          <h2>Films</h2>
          <div id="filmsCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="carousel-item <?= $i === 1 ? 'active' : '' ?>">
                  <img src="./app/assets/images/films/film<?= $i ?>.jpg" class="d-block w-100" alt="Film <?= $i ?>">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Film <?= $i ?></h5>
                  </div>
                </div>
              <?php endfor; ?>
            </div>
            <a class="carousel-control-prev" href="#filmsCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#filmsCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eaque magnam placeat iusto quisquam quibusdam debitis asperiores, mollitia temporibus cum. Delectus vero quibusdam veniam recusandae corrupti fuga animi fugiat, non commodi. Perferendis eum quod distinctio nemo, placeat, voluptas dolore aspernatur, harum neque molestias totam expedita quidem doloremque? A, quo! Alias incidunt ullam maiores non fugiat. Iusto, consequuntur eos magni aliquam nesciunt modi voluptatum, nisi doloribus saepe libero beatae adipisci.</p>
        </section>
        <section id="now-showing">
          <h2>Now Showing</h2>
          <div id="nowShowingCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="carousel-item <?= $i === 1 ? 'active' : '' ?>">
                  <img src="./app/assets/images/films/film<?= $i ?>.jpg" class="d-block w-100" alt="Now Showing Film <?= $i ?>">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Now Showing Film <?= $i ?></h5>
                  </div>
                </div>
              <?php endfor; ?>
            </div>
            <a class="carousel-control-prev" href="#nowShowingCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#nowShowingCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam velit, sed voluptate, doloremque expedita laborum ipsum quibusdam quam sit, reiciendis cum dignissimos mollitia distinctio! Temporibus rerum a quae pariatur beatae culpa quo corrupti, ipsa, magni voluptatibus eos architecto veniam quaerat excepturi fuga corporis id. Ab cupiditate molestiae, velit eos, debitis corrupti ratione optio ad nisi eligendi dignissimos fugiat at mollitia odio culpa maxime deleniti quod beatae, ducimus voluptate tempore tempora maiores.</p>
        </section>
        <section id="top-movie">
          <h2>Top Movie</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, ipsam et recusandae voluptatem adipisci, quam illo consequuntur ullam accusamus voluptates quidem molestiae. Laudantium dolore cupiditate neque sint quo, iure velit quasi enim magni consectetur quidem. Doloribus, ad et corporis, nobis iusto esse velit rem nesciunt soluta ullam ipsam vel libero distinctio dolore non dolorem delectus! Nostrum ex molestiae modi tempore quidem. Error iure perferendis eveniet ea esse provident, natus enim voluptates, magnam voluptas dolorum dicta blanditiis expedita similique aliquam illo iste molestiae quae dolores impedit? At inventore soluta nam perferendis vel, sed nulla repellat rerum tempore aliquam maxime adipisci laboriosam exercitationem, illo fugiat nemo deserunt?</p>
        </section>
        <section id="book-tickets">
          <h2>Book Tickets</h2>
          html
          Copy
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel repellat doloremque sapiente ad reiciendis quis provident similique repudiandae ea eligendi odit ratione unde maiores exercitationem veritatis voluptatibus blanditiis iste laboriosam, a sint nostrum expedita fugiat delectus necessitatibus. Quia, debitis. Natus molestiae aliquid, molestias dignissimos, explicabo libero neque ut quidem, eius blanditiis quos labore iure mollitia. Tempora distinctio atque ea eos, sapiente praesentium, veritatis vel doloribus expedita blanditiis et aspernatur dolore odit hic error cum velit, laborum explicabo iure voluptates! Illo ipsam temporibus aliquam cumque? Non quos libero hic dignissimos iure ducimus nobis est.</p>
        </section>
      </div>

      <!-- Aside Content -->
      <div class="col-md-4">
        <aside>
          <section id="about-us">
            <h2>About Us</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, quam consequatur? Ducimus assumenda cupiditate sequi blanditiis ad inventore quibusdam eius earum doloremque itaque soluta, perferendis pariatur aliquam enim? Libero nulla vitae sapiente voluptate animi magni veritatis, ab tenetur, obcaecati soluta culpa unde amet maiores nam quisquam nisi alias dolores adipisci accusantium omnis sed ipsum? Provident consectetur ipsa.</p>
          </section>
        </aside>
      </div>
    </div>
  </main>

  <footer class="text-center mt-5 py-4 bg-light">
    <h5>Copyright Get Film Indonesia All Right Reserved 2024</h5>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>