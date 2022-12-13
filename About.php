<?php
      include("header.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>

    <!-- Example Code -->
    
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
                  <img src="image/Slider.PNG" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="10000">
                  <img src="image/Slider.PNG" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item active" data-bs-interval="10000">
                  <img src="image/Slider.PNG" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    <!-- End carousel Code -->
    <div class="Visionpoint"id="Vision">
    <img src="image/Vision.PNG" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100">
    <div class="content">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div>
    </div>
    <div class="Visionpoint"id="Mission">
    <img src="image/Mission.PNG" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100">
    <div class="content">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div>
    </div>
    <div class="Visionpoint"id="Team">
    <img src="image/Team.PNG" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100">
    <div class="content">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div>
  </div>
  <div class="Visionpoint"id="Journey">
    <img src="image/Journy.PNG" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100">
    <div class="content">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div>
    </div>
    <?php
      include("footer.php");
     ?>
  </body>
</html>
