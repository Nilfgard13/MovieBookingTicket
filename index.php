<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.1.1/swiper-bundle.min.css">

  <!-- My CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:ital@0;1&display=swap" rel="stylesheet">

  <!-- Javascript -->
  <script src="script.js" defer></script>

  <!-- Website Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <title>Get Film Official</title>
</head>

<body>
  <header>
    <div class="jumbotron">
      <h1>Welcome to Get Film</h1>
    </div>

    <nav>
      <div class="logo-image">
        <img src="assets/images/getfilm-logo.png" alt="logo-get-film-official" height="25px">
      </div>
      <div class="menu-list">
        <ul>
          <li><a href="#films">FILMS</a></li>
          <li><a href="#now-showing">NOW SHOWING</a></li>
          <li><a href="#top-movie">TOP MOVIE</a></li>
          <li><a href="#book-tickets">BOOK TIKETS</a></li>
          <li><a href="#about-us">ABOUT US</a></li>
        </ul>
      </div>
      <a href="public/login.php"><button class="login-btn">LOGIN</button></a>
    </nav>
  </header>

  <main>
    <!-- Main Content -->
    <div class="content">
      <article id="films">
        <h2>Films</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eaque magnam placeat iusto quisquam
          quibusdam debitis asperiores, mollitia temporibus cum. Delectus vero quibusdam veniam recusandae corrupti fuga
          animi fugiat, non commodi. Perferendis eum quod distinctio nemo, placeat, voluptas dolore aspernatur, harum
          neque molestias totam expedita quidem doloremque? A, quo! Alias incidunt ullam maiores non fugiat. Iusto,
          consequuntur eos magni aliquam nesciunt modi voluptatum, nisi doloribus saepe libero beatae adipisci.
          Voluptatum ut exercitationem debitis quia incidunt ipsum consectetur impedit est sed molestiae ab ratione
          minus facilis, repudiandae commodi saepe et, nam in similique, cupiditate expedita! Modi rem nisi quasi quae!
          Inventore unde laborum, alias tempore doloribus quis vel sunt. Est dignissimos id sit aliquam, odio eligendi
          alias blanditiis iure, eveniet recusandae praesentium consequuntur exercitationem. Aliquam ea provident cum
          necessitatibus quam ipsam voluptatem ratione vel dolores aperiam. Alias quia reiciendis molestias nostrum.
          Dolorum vitae explicabo sequi unde soluta modi consectetur perferendis animi odit magni fuga deserunt cum,
          accusamus sunt ratione! Quam temporibus aspernatur porro est optio expedita excepturi. Voluptas laborum labore
          neque, cum, ratione, nobis repudiandae nihil quam aliquam doloribus corrupti dicta enim adipisci animi ea!
          Perspiciatis debitis error, laudantium nihil tenetur perferendis pariatur culpa placeat quidem suscipit vitae
          nisi, similique, ipsa temporibus ex. Cum enim quasi fugit a hic perspiciatis molestiae animi nostrum ducimus
          eveniet veritatis aut officiis, dolore esse accusamus necessitatibus maxime eaque nemo aspernatur illum amet
          in praesentium sapiente? Est quis explicabo veritatis recusandae assumenda id laborum impedit in, adipisci a
          alias labore quas asperiores eligendi harum dolore mollitia.</p>
      </article>
      <article id="now-showing">
        <h2>Now Showing</h2>
        <div class="film-gallery">
          <?php include_once "models/film_models.php"; ?>
        </div>
        <div class="button-slider">
          <button class="prev-btn">&#10094;</button>
          <div class="dots"></div>
          <button class="next-btn">&#10095;</button>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam velit, sed voluptate, doloremque expedita
          laborum ipsum quibusdam quam sit, reiciendis cum dignissimos mollitia distinctio! Temporibus rerum a quae
          pariatur beatae culpa quo corrupti, ipsa, magni voluptatibus eos architecto veniam quaerat excepturi fuga
          corporis id. Ab cupiditate molestiae, velit eos, debitis corrupti ratione optio ad nisi eligendi dignissimos
          fugiat at mollitia odio culpa maxime deleniti quod beatae, ducimus voluptate tempore tempora maiores.
          Quibusdam optio assumenda asperiores veritatis, velit sapiente accusamus sequi nisi tempore qui fugit impedit
          vero ullam unde architecto iusto soluta vitae. Nesciunt perferendis impedit voluptatum optio libero distinctio
          dicta sapiente aspernatur eius, expedita corrupti placeat inventore perspiciatis vero tempora fugiat
          consequuntur ad fugit vitae nostrum? Suscipit, reiciendis dicta. Ipsam autem at nam nobis aliquam tenetur
          inventore molestias vitae debitis enim vero minus ducimus mollitia optio saepe voluptatibus, maiores hic, illo
          odit sit reprehenderit ea! Quasi minus minima incidunt voluptates cumque obcaecati tempore, totam corporis id
          atque nobis magnam libero mollitia recusandae laudantium pariatur eos iure repellendus et excepturi alias
          consectetur neque perspiciatis odit! Laboriosam magni suscipit hic delectus, explicabo ipsam dicta officiis
          odio eos voluptatum impedit praesentium nulla consequuntur architecto velit adipisci, voluptas esse voluptate
          est vel aspernatur laudantium! Eveniet ullam autem, nulla quisquam quod aperiam reiciendis itaque magni minima
          harum blanditiis soluta perferendis, vero esse! Iusto dolorem, autem totam ducimus laudantium pariatur, cum
          facilis alias illum culpa ab temporibus consectetur minus veritatis tempora eligendi quasi quia doloribus
          quis? Minima, itaque perspiciatis. Tempora recusandae accusamus possimus deleniti fugiat tempore.</p>
      </article>
      <article id="top-movie">
        <h2>Top Movie</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum, ipsam et recusandae voluptatem adipisci,
          quam illo consequuntur ullam accusamus voluptates quidem molestiae. Laudantium dolore cupiditate neque sint
          quo, iure velit quasi enim magni consectetur quidem. Doloribus, ad et corporis, nobis iusto esse velit rem
          nesciunt soluta ullam ipsam vel libero distinctio dolore non dolorem delectus! Nostrum ex molestiae modi
          tempore quidem. Error iure perferendis eveniet ea esse provident, natus enim voluptates, magnam voluptas
          dolorum dicta blanditiis expedita similique aliquam illo iste molestiae quae dolores impedit? At inventore
          soluta nam perferendis vel, sed nulla repellat rerum tempore aliquam maxime adipisci laboriosam
          exercitationem, illo fugiat nemo deserunt? Blanditiis temporibus quia aperiam saepe aspernatur nulla nesciunt
          deleniti sunt facilis maxime, unde assumenda, optio illum ut pariatur, corrupti dolorum minus laborum
          accusantium odit aut consequuntur consectetur modi sed! Repudiandae quas excepturi dignissimos aliquid ipsum
          architecto temporibus aperiam mollitia quisquam distinctio quae labore, ullam eius similique molestiae!
          Dolores provident velit animi vel vitae perspiciatis omnis exercitationem voluptates amet reprehenderit illo,
          commodi magnam maiores quibusdam, deleniti vero illum? Possimus optio nam adipisci earum quaerat quam omnis
          officiis reprehenderit quisquam recusandae. Nobis unde sit non facilis pariatur labore similique asperiores.
          Omnis tempora corporis, blanditiis numquam fugit repellendus eos ullam sapiente molestias enim possimus,
          facilis qui repudiandae necessitatibus quia earum incidunt animi quidem repellat facere. Cum ipsa unde
          dolorum? Quisquam in ullam error. Molestiae atque impedit obcaecati quidem tempora assumenda odit natus, hic,
          eos nostrum sequi maxime dolor rerum ratione voluptatem perspiciatis minus a officia! Laboriosam, quia
          dolorem?</p>
      </article>
      <article id="book-tickets">
        <h2>Book Tickets</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel repellat doloremque
          sapiente ad reiciendis quis provident similique repudiandae ea eligendi odit ratione unde maiores
          exercitationem
          veritatis voluptatibus blanditiis iste laboriosam, a sint nostrum expedita fugiat delectus necessitatibus.
          Quia,
          debitis. Natus molestiae aliquid, molestias dignissimos, explicabo libero neque ut quidem, eius blanditiis
          quos
          labore iure mollitia. Tempora distinctio atque ea eos, sapiente praesentium, veritatis vel doloribus expedita
          blanditiis et aspernatur dolore odit hic error cum velit, laborum explicabo iure voluptates! Illo ipsam
          temporibus aliquam cumque? Non quos libero hic dignissimos iure ducimus nobis est. Libero, nisi natus.
          Praesentium reiciendis eius, consectetur itaque maiores esse neque dolorum architecto repellendus expedita
          sequi
          provident eveniet beatae fuga asperiores porro voluptatibus corporis ipsum ipsam blanditiis minus quam!
          Voluptas
          cupiditate harum assumenda aut quos, tempore explicabo voluptate aliquid sapiente. Vero blanditiis repellat
          nemo
          error illum. Praesentium voluptatem numquam ab accusamus suscipit earum et laboriosam ut ullam commodi in,
          expedita cumque sint provident eos omnis assumenda. Natus harum sequi quod, aspernatur exercitationem ipsam.
          Cumque consequatur ullam dolore obcaecati nemo omnis doloribus voluptatem? Suscipit necessitatibus magni iste
          commodi odit amet beatae dolorum odio? Nesciunt doloribus adipisci dolorem impedit suscipit, asperiores sint
          enim, mollitia cumque consequuntur est autem laudantium facere! Commodi ipsa ipsum nisi magni voluptatibus
          deleniti necessitatibus accusamus perspiciatis, voluptates nihil delectus a vitae maiores! Ratione harum iste
          similique minus architecto et dolor provident repellendus dignissimos aspernatur laudantium, quasi reiciendis
          sed eaque molestias amet corporis officiis at? Sunt, suscipit magnam! Harum ad repellendus quam nemo magni
          dolor
          odit!</p>
      </article>
    </div>

    <!-- Aside Content -->
    <aside>
      <article id="about-us">
        <h2>About Us</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, quam consequatur?
          Ducimus assumenda cupiditate sequi blanditiis ad inventore quibusdam eius earum doloremque itaque soluta,
          perferendis pariatur aliquam enim? Libero nulla vitae sapiente voluptate animi magni veritatis, ab tenetur,
          obcaecati soluta culpa unde amet maiores nam quisquam nisi alias dolores adipisci accusantium omnis sed ipsum?
          Provident consectetur ipsa, dolorum maxime voluptas dolores necessitatibus ex pariatur? Voluptatem, quo
          inventore
          consequuntur reiciendis, perspiciatis culpa iusto, illo quam perferendis possimus odit excepturi blanditiis
          ullam
          nihil fugit repudiandae officia. Vero, ipsa. Alias, hic adipisci velit ducimus temporibus, iure libero
          voluptatem,
          est labore placeat impedit accusantium. Qui nam distinctio tenetur rerum quisquam alias labore nobis itaque
          beatae
          iure velit id quis ratione laboriosam maxime reiciendis quae voluptatum, doloremque quo esse expedita
          necessitatibus! Praesentium quos assumenda, veniam laboriosam a ab dolore non explicabo recusandae debitis
          iure,
          numquam hic cumque placeat incidunt commodi alias. Accusamus accusantium commodi odio maxime ducimus,
          voluptatem
          molestias libero consectetur voluptates, aspernatur cupiditate perspiciatis expedita nam quidem reiciendis
          facilis
          laboriosam pariatur at repellendus alias et cumque iste qui a. Doloremque, sequi? Accusamus magnam incidunt
          odit
          quod maxime velit ipsam quo consequuntur delectus ab ea voluptates, eligendi commodi quos dolor minus soluta
          fugit
          excepturi itaque vero iusto distinctio! Temporibus sunt sequi vitae quisquam architecto dignissimos, qui
          libero
          nesciunt perspiciatis quibusdam molestias, molestiae, aut assumenda voluptatum. Harum mollitia quos doloribus
          architecto vel nihil perferendis soluta officia quasi pariatur sit eos vitae deleniti, porro id maxime
          delectus
          eveniet doloremque at. Blanditiis iure ea eligendi sunt aut consequuntur.
        </p>
      </article>
    </aside>
  </main>

  <!-- Image Dot Slider -->
  <div class="slide-container">
    <div class="slide-content">
      <div class="card-wrapper">
        <div class="card">
          <div class="image-content">
            <span class="overlay"></span>

            <div class="card-image">
              <img src="/assets/images/film1.png" alt="" class="card-img">
            </div>
          </div>

          <div class=" card-content">
            <h3 class="name">Badarawuhi</h3>
            <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem, eligendi! Alias suscipit voluptatem temporibus reiciendis ab, labore voluptate esse unde iure dolor quibusdam inventore maiores?</p>
            <button class="button">View More</button>
          </div>

        </div>
      </div>
    </div>
  </div>

  <footer>
    <h5>Copyright Get Film Indonesia All Right Reserved 2024</h5>
  </footer>
</body>

</html>

<!-- Terdapat elemen Header, Footer, Main, Article, dan Aside.
Masing-masing elemen wajib berisi konten yang peruntukkannya sesuai dengan elemen tersebut (menerapkan konsep semantic HTML dalam menyusun struktur website).
Sebagai contoh: Header berisi judul dan navigation.
Menampilkan sebuah gambar di dalam elemen aside, gambar perlu dibuat menggunakan elemen img.
Menyusun layout dengan menggunakan teknik flexbox, bukan float. -->