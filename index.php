<?php ob_start();
include 'shared/header.php';
include 'shared/nav.php';
if($_SESSION['admin']){

}else {
    header("location: /university/admin/login.php");
};

ob_end_flush();
?>


<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(assets/img/slide/slide-1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Future university</span></h2>
                <p class="animate__animated animate__fadeInUp">Future University is a private research university in Cairo, Egypt. The university offers American-style learning programs at the undergraduate, graduate and professional levels, along with a continuing education program.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(assets/img/slide/slide-2.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Accreditation & Ranking</h2>
                <p class="animate__animated animate__fadeInUp">Our global accreditation and ranking are a reflection of the university’s standards across all of its functions from student life, academics, facilities, financials and sustainability. Our commitment to global standards has made our students' degrees recognized and valued all over the world.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

<?php include 'shared/script.php'?>