<!DOCTYPE html>
<html lang="en">

<head>
  <title>Duniya Dekho-A Travelling Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
    rel="stylesheet">

</head>

<body>

  <?php include 'menu.php'; ?>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/cc1.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/cc2.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/cc3.avif" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center">About Us</h1>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/a4.jpg" alt="Loading Problem" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-6">Welcome to Duniya Dekho, where every journey is an adventure waiting to be discovered!
          </h2>
          <p class="py-3">At Duniya Dekho, we're passionate about exploration and creating unforgettable travel
            experiences for our community of adventurers. Whether you're a seasoned globetrotter or embarking on your
            very first expedition, we're here to be your trusted companion on your travel odyssey.<br>Our mission is
            simple: to inspire, inform, and empower travelers like you to venture beyond the beaten path and immerse
            yourself in the beauty and diversity of the world. With our curated selection of destinations, expert travel
            tips, and personalized recommendations, we aim to make every step of your journey seamless and memorable.
          </p>
          <a href="about.php" class="btn btn-success" link="about.php">Check more</a>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center">Our Services</h1>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/t.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Travel Guides</h4>
              <p class="card-text">Travel Guides based on their ratings.</p>
              <a href="#" class="btn btn-primary">See Travel Guides</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/h.cms" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Hotel Booking</h4>
              <p class="card-text">All hotels facilities with affordable prices.</p>
              <a href="#" class="btn btn-primary">See Hotels</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/f.jpg" alt="Card image" height="276">
            <div class="card-body">
              <h4 class="card-title">Flight Booking</h4>
              <p class="card-text">All flights booking with free cancellation.</p>
              <a href="#" class="btn btn-primary">See Flights</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center">Our Gallery</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/5.jpg" alt="" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/2.jpg" alt="" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/3.jpg" alt="" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/8.jpg" alt="" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/1.jpg" alt="" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/6.jpg" alt="" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/7.jpg" alt="" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/4.jpg" alt="" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="images/9.jpg" alt="" class="img-fluid pb-4">
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center">Contact Us</h1>
    </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comments"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>

  <footer>
    <p class="p-3 bg-dark text-white text-center">Designed by: Kamlesh Rawat | All rights reserved<br>Email Id:
      kamleshrawat001ntl@gmail.com <br>Phone No: +91 8958687422</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>