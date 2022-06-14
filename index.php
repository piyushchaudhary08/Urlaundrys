<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--=============== Favicon ===============-->
  <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/png" />
  <!--=============== Swiper CSS ===============-->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!--=============== Boxicons ===============-->
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <!--=============== Custom StyleSheet ===============-->
  <link rel="stylesheet" href="./scss/styles.css" />
  <title>urLAUNDRY</title>
</head>

<body>
  <!--=============== Header ===============-->
  <header class="header">
    <!--=============== Home ===============-->


    <nav class="navbar">
      <div class="row d-flex container">
        <a href="" class="logo d-flex">
          <img src="./images/logo.png" alt="" />
        </a>

        <ul class="nav-list d-flex">
          <a href="#homepage">Home</a>
          <a href="#services">About</a>
          <a href="#about">Benefits</a>
          <a href="#recipes">Clothes</a>

          <a href="#contactpage">Contact</a>
          <span class="close d-flex"><i class="bx bx-x"></i></span>
        </ul>

        <div class="col d-flex">
          <!--<form>
              <input type="search" placeholder="Search your item" />
              <button class="d-flex"><i class="bx bx-search"></i></button>
            </form>
            <div class="cart-icon d-flex">
              <i class="bx bx-shopping-bag"></i>
              <span>0</span>
            </div>
            <a class="btn signin">Sign In</a>
          </div>-->

          <!-- Hamburger -->
          <div class="hamburger d-flex">
            <i class="bx bx-menu"></i>
          </div>
        </div>
    </nav>


    <!--===========hero section==============-->

    <div class="home" id="homepage">
      <div class="row container">
        <div class="col">
          <div class="faster">
            More than Faster
            <div class="image d-flex">
              <img src="./images/image.png" alt="" />
            </div>
          </div>
          <h1>
            Get your laundry <br />
            delivered right to <br />
            <span class="color">your door</span>
          </h1>
          <p>
            Clothes that is delivered at the right time. The trendy washed clothes delivery
            partner. Good sparkled clothes is what we deliver. Your clothes companion.
          </p>
          <a href="#contactpage" class="btn">Contact</a>
        </div>
        <div class="col">
          <img src="./images/delivery-guy-3-removebg-preview.png" alt="" height="2800" width="4000" />
        </div>
      </div>
    </div>


    <!--=============== SignIn Form ===============-->

    <div class="wrapper">
      <form action="" class="form">
        <h2>SIGN IN</h2>

        <div class="control">
          <label for="">Enter Email:</label>
          <input type="email" placeholder="Enter Your Email" />
        </div>
        <div class="control">
          <label for="">Password:</label>
          <input type="password" placeholder="Password" />
        </div>
        <div class="checkbox d-flex">
          <input type="checkbox" />
          <span>Remember Me</span>
        </div>
        <button class="btn">Sign In</button>
        <div class="links">
          <span>Forgot Password? <a href="">Click Here</a></span>
          <span>Don't Have An Account? <a href="">Create One</a></span>
        </div>
      </form>

      <div class="close-form">
        <i class="bx bx-x"></i>
      </div>
    </div>

  </header>

  <!--=============== Services ===============-->

  <section class="section services" id="services">
    <div class="row container">
      <div class="col">
        <h2>Why we are Best in our Twon</h2>
        <p>
        From your favorite jeans to your baby’s blankie, our experienced laundry specialists will care for your clothes as if they were their own.
        </p>
      </div>
      <div class="col">
        <div class="card">
          <img src="./images/smartphone.png" alt="" />
          <h3>
            Place your <br />
            order through <br />
            website/call.
          </h3>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="./images/service-mid.PNG" alt="" />
          <h3>
            Clean With <br />
            Premium quality <br />
            products
          </h3>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="./images/Take Away-rafiki.svg" alt="" />
          <h3>
            Get delivery <br />
            at your door <br />
            step
          </h3>
        </div>
      </div>
    </div>

  </section>


  <!--=============== About ===============-->
  <section class="section about" id="about">
    <div class="row container">
      <div class="col">
        <!--<img src="./images/Take Away-pana.svg" alt="" />-->
        <img src="./images/services.jpg" alt="" width="100%" height="100%" />
      </div>
      <div class="col">
        <h2>Take a look at the benefits we offer for you</h2>
        <p>
          Good service means a friendly, welcoming service. A laundary owner
          should not merely strive to avoid bad service,
        </p>
        <div class="d-grid">
          <div class="card">
            <img src="./images/car-icon.svg" alt="" />
            <h4>Free Home Delivary</h4>
            <span>For all orders over 2 Kg</span>
          </div>
          <div class="card">
            <img src="./images/dollar-icon.svg" alt="" />
            <h4>Members Benefits</h4>
            <span>Extra 10% benefits</span>
          </div>
          <div class="card">
            <img src="./images/security-icon.svg" alt="" />
            <h4>User Friendly </h4>
            <span>Facilities as per conditions by users.</span>
          </div>
          <div class="card">
            <img src="./images/time-icon.svg" alt="" />
            <h4>Quality Support</h4>
            <span>Alway Online 24/7</span>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--=============== Recipes ===============-->

  <section class="section recipes" id="recipes">
    <h2>Working Area</h2>
    <div class="row container">
      <div class="filters d-flex">
        <span data-filter="All Product">See All Product</span>
        <span data-filter="Fast Food">Mens Clothing</span>
        <span data-filter="Rice Menu">Womens Clothing</span>
        <span data-filter="Desserts">Wedding Wear</span>
        <span data-filter="Coffee">Blanket</span>
        <span data-filter="Pizza">Decor Items</span>
      </div>

      <div class="products">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper" id="products-wrapper">


            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/shirt-1.PNG" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Shirt</h4>
                <div class="price">

                </div>
                <!--<div class="button">Add To Cart+</div>-->
              </div>
            </div>


            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/tshirt.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>T-Shirt</h4>
                <div class="price">

                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/jeans.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Denim Jeans</h4>
                <div class="price">

                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/coat.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Suit</h4>
                <div class="price">

                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/caps.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Caps</h4>
                <div class="price">

                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/shoes.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Shoes</h4>
                <div class="price">

                </div>

              </div>
            </div>


            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/womenclt.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Women tops</h4>
                <div class="price">

                </div>

              </div>
            </div>

            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/dupata.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Dupata's</h4>
                <div class="price">

                </div>

              </div>
            </div>

            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/purse.jpeg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Purses</h4>
                <div class="price">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/saree.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Saree</h4>
                <div class="price">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/lenga.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Lehenga</h4>
                <div class="price">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/women.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Dresses</h4>
                <div class="price">
                </div>
              </div>
            </div>


            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/sherwani.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Sherwani</h4>
                <div class="price">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/blanket.webp" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Blanket</h4>
                <div class="price">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/bedsheet.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Bedsheet</h4>
                <div class="price">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/pillow.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Pillow</h4>
                <div class="price">
                </div>
              </div>
            </div>



            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/carpet.jpg" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Carpets</h4>
                <div class="price">
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="card">
                <div class="image"><img src="./images/home.webp" alt=""></div>
                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
                <h4>Home decor items</h4>
                <div class="price">
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="pagination">
          <div class="custom-pagination"></div>
        </div>
      </div>
    </div>
  </section>





  <!--=============== Testimonials ===============-->

  <section class="section testimonials" id="testimonials">
    <div class="row container">
      <div class="col">
        <h1>
          TEAM MEMBERS <br />
          <span></span>
        </h1>
        <div class="card" data-filter="rosele">
          <div class="d-flex">
            <div class="image">
              <img src="./images/Piyush.jpg" alt="" />
            </div>
            <div>
              <h4>Rudra Sherawat</h4>
              <!--<span>Executive Officer</span>-->
            </div>
          </div>
        </div>
        <div class="card" data-filter="marvin">
          <div class="d-flex">
            <div class="image">
              <img src="./images/gudiya.jpg" alt="" />
            </div>
            <div>
              <h4>Piyush Chaudhary</h4>

            </div>
          </div>
        </div>
        <div class="card" data-filter="guy">
          <div class="d-flex">
            <div class="image">
              <img src="./images/profile-3.jpg" alt="" />
            </div>
            <div>
              <h4>Ritik Malik</h4>

            </div>
          </div>
        </div>
        <div class="card" data-filter="kathryn">
          <div class="d-flex">
            <div class="image">
              <img src="./images/profile-4.jpg" alt="" />
            </div>
            <div>
              <h4>Pinky Sharawat</h4>

            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <h2>
          What our Customers <br />
          <span>are saying</span>
        </h2>
        <div class="test-wrapper">
          <div class="testimonial active" data-id="rosele">
            <div class="d-flex">
              <div>
                <h4>Megha Sherawat</h4>
                <span>Marketing Coordinator</span>
              </div>

              <div class="rating">
                <span><i class="bx bxs-star"></i></span>
                <span><i class="bx bxs-star"></i></span>
                <span><i class="bx bxs-star"></i></span>
                <span><i class="bx bxs-star"></i></span>
                <span><i class="bx bxs-star"></i></span>
              </div>
            </div>

            <p>
              “Having good reviews is crucial these days. It is not
              just making our decision to pick one easier, Excellent service! Very professional! Laundry picked up and delivered promptly. Laundry folded and packed neatly. Very friendly and polite staff, willing to listen to all concerns. Very happy with this service!”
            </p>
          </div>
        </div>

              <div class="test-wrapper">
            <div class="testimonial active" data-id="rosele">
              <div class="d-flex">
                <div>
                  <h4>RAHUL MEHTA</h4>
                  <span>Marketing Coordinator</span>
                </div>

                <div class="rating">
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                  <span><i class="bx bxs-star"></i></span>
                </div>
              </div>

              <p>
              “Having good reviews is crucial these days. It is not
              just making our decision to pick one easier, Excellent service! Very professional! Laundry picked up and delivered promptly. Laundry folded and packed neatly. Very friendly and polite staff, willing to listen to all concerns. Very happy with this service!”
            
              </p>
            </div>
          </div>

      </div>
    </div>
  </section>




  <!--=============== App ===============-->

  <!--<section class="section app">
      <div class="row container">
        <div class="col">
          <div class="circle">
            <div class="inner-circle"></div>
            <img src="./images/moble.jpg" alt="" />
          </div>
        </div>
        <div class="col">
          <h2>
            Never Feel Hungry! Download Our Mobile App Order Delicious Food
          </h2>
          <p>
            Online ordering has enabled many restaurants to manage their peak
            business hours very effectively.
          </p>
          <div class="d-flex">
            <img src="./images/app-store.png" alt="" />
            <img src="./images/google-play.png" alt="" />
          </div>
        </div>
      </div>
    </section>-->


  <!-- php code -->
  <?php
  $connection = mysqli_connect('localhost', 'root');
  if ($connection) {
  } else {
  }
  mysqli_select_db($connection, 'akshu');

  $name = $contact = $email = $location = $item = NULL;
  $nameerr = $contacterr = $emailerr = $itemerr = NULL;

  $flag = true;
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameerr = "name is required";
      $flag = false;
    } else {
      $name = test_input($_POST["name"]);
    }

    if (empty($_POST["contact"])) {
      $contacterr = "contact is required";
      $flag = false;
    } else {
      $contact = test_input($_POST["contact"]);
    }

    if (empty($_POST["email"])) {
      $emailerr = "email is required";
      $flag = false;
    } else {
      $email = test_input($_POST["email"]);
    }
    if (empty($_POST["location"])) {
      $locationerr = "location is required";
      $flag = false;
    } else {
      $location = test_input($_POST["location"]);
    }

    if (empty($_POST["item"])) {
      $itemerr = "item is required";
      $flag = false;
    } else {
      $item = test_input($_POST["item"]);
    }

    if ($flag) {

      $sql = "INSERT INTO akshu (name, contact, email, location, item) VALUES('$name', '$contact', '$email', '$location',  '$item' ) ";
      if ($connection->query($sql) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show justify-content-center" role="alert" >
     <strong>Success! we contact you soon!!</strong>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     </button>
   </div>';
      } 
    } else {
      // header("location : index.php?error=false");
      echo '<div class="col-lg-4 col-md-4 col-sm-4 container justify-content-center">
      <div class="col" style="background:red">
      
      <div class="alert alert-danger alert-dismissible fade show" role="alert" class="text-align-center">
             <strong>Error! All the field are required </strong> 
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             </button>
           </div></div>
           </div>';
    }
  }
  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <!-- php code  -->


  <!--================Contact page======================-->

  <div class="container1" id="contactpage">
    <div style="text-align:center">
      <h2>Contact Us</h2>
      <p></p>
    </div>
    <div class="row">
      <div class="column">
        <img src="./images/s-ervice.jpg" style="width:80%">
      </div>
      <div class="column">
        <form action="" method="post">
          <label for="fname">Name</label>
          <input type="text" id="fname" name="name" placeholder="Your name..">
          <label for="fname">Contact Number</label>
          <input type="text" id="fname" name="contact" placeholder="Contact number ..">
          <label for="fname">Email</label>
          <input type="text" id="fname" name="email" placeholder="Your Email..">
          <label for="lname">Location</label>
          <input type="text" id="lname" name="location" placeholder="Your location..">

          <label for="subject">Write items which you want for laundry process</label>
          <textarea id="subject" name="item" placeholder="Clothes with quantity" style="height:170px"></textarea>
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>






  <!-- php code -->



  <!--=============== Footer ===============-->

  <!--<footer class="footer">
      <div class="row container">
        <div class="col">
          <div class="logo d-flex">
            <img src="./images/logo.png" alt="logo" />
          </div>
          <p>
            Retail food delivery is a courier service in which a restaurant,
            store, or independent food-delivery
          </p>
          <div class="icons d-flex">
            <div class="icon d-flex">
              <i class="bx bxl-facebook"></i>
            </div>
            <div class="icon d-flex"><i class="bx bxl-twitter"></i></div>
            <div class="icon d-flex"><i class="bx bxl-linkedin"></i></div>
          </div>
        </div>
        <div class="col">
          <div>
            <h4>Company</h4>
            <a href="">About Us</a>
            <a href="">Blog</a>
            <a href="">All Products</a>
            <a href="">Locations Map</a>
          </div>
          <div>
            <h4>Services</h4>
            <a href="">Order tracking</a>
            <a href="">Wish List</a>
            <a href="">My account</a>
            <a href="">Terms & Conditions</a>
          </div>
          <div>
            <h4>Support</h4>
            <a href="">FAQ</a>
            <a href="">Policy </a>
            <a href="">Business</a>
            <a href="">Support Carrer</a>
          </div>
          <div>
            <h4>Contact</h4>
            <a href="">WhatsApp</a>
            <a href="">Support 24 </a>
            <a href="">Quick Chat</a>
          </div>
        </div>
      </div>
    </footer>-->
  <div class="footer-bottom">
    <div class="row container d-flex">
      <p>Copyright © 2022 company name</p>
      <p>Created by PIYUSH CHAUDHARY </p>
    </div>
  </div>


  <!--=============== Swiper JS ===============-->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!--=============== Custom JS ===============-->
  <script src="./js/testimonial.js"></script>
  <script src="./js/products.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>