// Fungsi untuk menangani pengguliran halus ke target
function smoothScroll (target, duration) {
  var targetElement = document.querySelector(target)
  var targetPosition = targetElement.offsetTop
  var startPosition = window.pageYOffset
  var distance = targetPosition - startPosition
  var startTime = null

  function animation (currentTime) {
    if (startTime === null) startTime = currentTime
    var timeElapsed = currentTime - startTime
    var run = ease(timeElapsed, startPosition, distance, duration)
    window.scrollTo(0, run)
    if (timeElapsed < duration) requestAnimationFrame(animation)
  }

  // Fungsi untuk membuat efek 'ease-in-out'
  function ease (t, b, c, d) {
    t /= d / 2
    if (t < 1) return (c / 2) * t * t + b
    t--
    return (-c / 2) * (t * (t - 2) - 1) + b
  }

  requestAnimationFrame(animation)
}

// Menangani klik pada menu navigasi
var navLinks = document.querySelectorAll('nav ul li a')

navLinks.forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault() // Menghentikan default behavior dari link
    var target = this.getAttribute('href') // Mengambil target dari href
    smoothScroll(target, 350) // Panggil fungsi pengguliran halus
  })
})


const dots = document.querySelectorAll('.dot');

  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      const index = dot.getAttribute('data-index');
      showFilm(parseInt(index));
    });
  });

  function showFilm(index) {
    // Logika untuk menampilkan film dengan indeks yang diberikan
  }
