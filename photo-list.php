<!DOCTYPE html>
<html lang="en">

<!-- head part start -->
<?php include("./component/head.php"); ?>
<!-- head part end -->

<body>

  <!-- navbar part start -->
  <?php include("./component/menu.php"); ?>
  <!-- navbar part end -->


  <!-- breadcrumb part start -->
  <section class="bread-crumb">
    <div class="overlay">
      <div class="container">
        <div class="text text-center">
          <h3>Photo Album</h3>
          <ul class="list-unstyled">
            <li>
              <a href="index.html"><i class="fas fa-home"></i> Home</a>
            </li>
            <li>Photo Album</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb part end -->


  <!-- photo gallery page start -->
  <section class="gallery-list">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="photo-gallery.php" class="w-100">
            <div class="gallery-list-item">
              <div class="image">
                <img src="./images/sm1.jpg" alt="gall" class="img-fluid w-100">
                <i class="fa-regular fa-images"></i>
              </div>
              <div class="text text-center">
                <p class="title">Photos of 2023</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="photo-gallery.php" class="w-100">
            <div class="gallery-list-item">
              <div class="image">
                <img src="./images/sm2.jpg" alt="gall" class="img-fluid w-100">
                <i class="fa-regular fa-images"></i>
              </div>
              <div class="text text-center">
                <p class="title">Photos of 2023</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="photo-gallery.php" class="w-100">
            <div class="gallery-list-item">
              <div class="image">
                <img src="./images/sm3.jpg" alt="gall" class="img-fluid w-100">
                <i class="fa-regular fa-images"></i>
              </div>
              <div class="text text-center">
                <p class="title">Photos of 2023</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="photo-gallery.php" class="w-100">
            <div class="gallery-list-item">
              <div class="image">
                <img src="./images/sm4.jpg" alt="gall" class="img-fluid w-100">
                <i class="fa-regular fa-images"></i>
              </div>
              <div class="text text-center">
                <p class="title">Photos of 2023</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="photo-gallery.php" class="w-100">
            <div class="gallery-list-item">
              <div class="image">
                <img src="./images/sm5.jpg" alt="gall" class="img-fluid w-100">
                <i class="fa-regular fa-images"></i>
              </div>
              <div class="text text-center">
                <p class="title">Photos of 2023</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="photo-gallery.php" class="w-100">
            <div class="gallery-list-item">
              <div class="image">
                <img src="./images/sm6.jpg" alt="gall" class="img-fluid w-100">
                <i class="fa-regular fa-images"></i>
              </div>
              <div class="text text-center">
                <p class="title">Photos of 2023</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="photo-gallery.php" class="w-100">
            <div class="gallery-list-item">
              <div class="image">
                <img src="https://placehold.co/354x218?font=roboto" alt="gall" class="img-fluid w-100">
                <i class="fa-regular fa-images"></i>
              </div>
              <div class="text text-center">
                <p class="title">Photos of 2023</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
          <a href="photo-gallery.php" class="w-100">
            <div class="gallery-list-item">
              <div class="image">
                <img src="https://placehold.co/354x218?font=roboto" alt="gall" class="img-fluid w-100">
                <i class="fa-regular fa-images"></i>
              </div>
              <div class="text text-center">
                <p class="title">Photos of 2023</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <?php include("./component/pagination.php"); ?>
    </div>
  </section>
  <!-- photo gallery page end -->


  <!-- footer part start -->
  <?php include("./component/footer.php"); ?>
  <!-- footer part end -->


  <!-- script part start -->
  <?php include("./component/script.php"); ?>
  <!-- script part end -->

</body>

</html>