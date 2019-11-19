<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('./includes/header.php') ?>

</head>

<style>

</style>

<body>



  <?php include('./includes/header2.php') ?>
  <?php include('./includes/nav.php') ?>



  <main class="main-content">
    <div class="container-fluid photos">


      <div class="col-12 col-md-12 col-lg-12" id="main_banner">
        <img src="images/main_banner.jpg"   style="padding: 30px;width: 100%;height: 500px;" >

      </div>

      <div class="col-md-12" style="margin-top:10px">
        <div class="row posts">
          <div class="card-deck">
            <div class="card">
              <div class="row">
              <div class="col-md-4"><img src="images/main_header_banner.jpg" class="card-img-top" alt="..."></div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              </div>
              

              
            </div>
            <div class="card">
              <div class="row">
              <div class="col-md-4"><img src="images/main_header_banner.jpg" class="card-img-top" alt="..."></div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              </div>
              

              
            </div>


          </div>
        </div>

        <div class="row posts">
          <div class="card-deck">
            <div class="card">
              <img src="images/main_header_banner.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Updated on November 2019</small>
              </div>
            </div>
            <div class="card">
              <img src="images/main_banner.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Updated on November 2019</small>
              </div>
            </div>
            <div class="card">
              <img src="images/main_background.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Updated on November 2019</small>
              </div>
            </div>


          </div>
        </div>
      </div>
      <?php include('./includes/footer.php') ?>
    </div>
    </div>
  </main>

  </div> <!-- .site-wrap -->


    <script>
      $(document).ready(function() {
        setTimeout(function() {
            $("#main_banner").fadeOut(1500);
        }, 3000);

    
      });
    </script>
    </body>
  </html>

