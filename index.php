<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Filterable Portfolio Manager</title>
</head>

<body>
  <div id="portfolio" class="portfolio">
    <div class="container">
      <div class="row">
        <!-- start portfolio section -->
        <section id="portfolio" class="portfolio">
          <div class="container">
            <div class="row text-center">
              <h1 class="display-3 fw-bold text-capitilize mt-3">My Latest Work showcase</h1>
              <div class="heading-line"></div>
              <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro possimus maxime quos.</p>
            </div>
            <!-- filter Buttons -->
            <div class="row text-center mt-2 mb-2 g-3">
              <div class="col-md-12">
                <button class="btn btn-outline-primary" id="filter-button" type="button" data-filter="all">All</button>
                <button class="btn btn-outline-primary" id="filter-button" type="button"
                  data-filter="web">Websites</button>
                <button class="btn btn-outline-primary" id="filter-button" type="button"
                  data-filter="design">Design</button>
                <button class="btn btn-outline-primary" id="filter-button" type="button"
                  data-filter="mockup">Mockups</button>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 filter web">
                <div class="portfolio-box shadow">
                  <img src="assets/images/project-1.jpg" alt="" class="img-fluid">
                  <div class="portfolio-info">
                    <div class="caption">
                      <h4>Portfolio Website</h4>
                      <p>Website</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 filter design web">
                <div class="portfolio-box shadow">
                  <img src="assets/images/project-2.jpg" alt="" class="img-fluid">
                  <div class="portfolio-info">
                    <div class="caption">
                      <h4>Admin Panel Mockup</h4>
                      <p>Design,Web </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 filter web mockup">
                <div class="portfolio-box shadow">
                  <img src="assets/images/project-3.jpg" alt="" class="img-fluid">
                  <div class="portfolio-info">
                    <div class="caption">
                      <h4>eCommerce store design</h4>
                      <p>Website,eCommerce</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 filter mockup">
                <div class="portfolio-box shadow">
                  <img src="assets/images/project-4.jpg" alt="" class="img-fluid">
                  <div class="portfolio-info">
                    <div class="caption">
                      <h4>Mobile App Design</h4>
                      <p>mockup</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 filter web">
                <div class="portfolio-box shadow">
                  <img src="assets/images/project-5.jpg" alt="" class="img-fluid">
                  <div class="portfolio-info">
                    <div class="caption">
                      <h4>Business Website</h4>
                      <p>web</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 filter design web">
                <div class="portfolio-box shadow">
                  <img src="assets/images/project-6.jpg" alt="" class="img-fluid">
                  <div class="portfolio-info">
                    <div class="caption">
                      <h4>School Website</h4>
                      <p>design,website</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 filter mockup">
                <div class="portfolio-box shadow">
                  <img src="assets/images/project-7.jpg" alt="" class="img-fluid">
                  <div class="portfolio-info">
                    <div class="caption">
                      <h4>Blog Design</h4>
                      <p>mockup</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 filter web">
                <div class="portfolio-box shadow">
                  <img src="assets/images/project-8.jpg" alt="" class="img-fluid">
                  <div class="portfolio-info">
                    <div class="caption">
                      <h4>WordPress Plugin</h4>
                      <p>Websites</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 filter design">
                <div class="portfolio-box shadow">
                  <img src="assets/images/project-1.jpg" alt="" class="img-fluid">
                  <div class="portfolio-info">
                    <div class="caption">
                      <h4>WordPress Theme</h4>
                      <p>Design</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
  <script src="assets/js/custom.js"></script>

  <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>