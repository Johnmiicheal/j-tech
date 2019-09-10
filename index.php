<?php
require_once('phonedata.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>FIRST PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <img src="images/logo.png" class="" height="70px" width="80px"><a class="navbar-brand logo_font " href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto mr-5">
                <a class="nav-item nav-link ml-3 nav_links_style active home_def" href="#">HOME <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link ml-3 nav_links_style about_def" href="#">ABOUT</a>
                <a class="nav-item nav-link ml-3 nav_links_style contact_def" href="#">CONTACT</a>
                <a class="nav-item nav-link ml-3 nav_links_style news_def" href="#">NEWS</a>
                <a class="nav-item nav-link ml-3 nav_links_style login_def" href="login.php">LOGIN</a>
                <a class="nav-item nav-link ml-3 nav_links_style register_def" href="register.php">REGISTER</a>
              </div>
            </div>
          </nav>
          <section id="bgpic">
              <div class="container">
                  <h1 class="text-white text-center justify-center welcome">WELCOME TO <span class="aside">J-TECH</span></h1>
                  <p class="text-white text-center dive">FEEL FREE TO DIVE IN AND DISCOVER ALL OUR AMAZING PRODUCTS AND TAKE A PICK</p>
                  <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Subscribe To Our Newsletter">
                    <div class="input-group-append">
                      <button type="button" class="btn btn-primary text-white">SUBSCRIBE</button>
                      <button type="button" class="btn btn-primary text-white dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="login.php">Login</a>
                        <a class="dropdown-item" href="#">Signup</a>
                        <a class="dropdown-item" href="#">Page End</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">TECH PLATFORM</a>
                      </div>
                    </div>
                  </div>
                </div>
          </section>
        <section id="us">
          <div class=" about_head">
            <h1 class="text-center mt-4 mb-5"><span class="what">WHAT WE DO</h1></span>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-4 text-center">
              <div class="card card_styling mb-4 ">
                  <img src = "images/iphone.png" style="width:10em;" class="mb-3 what_we_do mx-auto my-auto">
                  <h2 class="text-primary ">NEWS</h2>
                  <p class="wwd_writeup ">We bring you UP-TO-DATE news on all the latest improvements in the smartphone Industry. We write about every new smartphone that has come into the market, its price, its features and other important things you may need to know about the phone. </p>
                </div>
              </div>
              <div class="col-md-4 text-center ">
              <div class="card card_styling mb-4 ">
                <img src = "images/mind.png" style="width:10em;" class="mb-3 what_we_do mx-auto my-auto">
                <h2 class="text-primary ">SUPPORT</h2>
                  <p class="wwd_writeup ">We provide technical support to help you out when looking for a phone that would be best for whatever amount of money you have. We can also give advice on a phone we think might suit you and help you to cut down on any extra costs involved in getting a new phone if you want. </p>
                </div>
              </div>
              <div class="col-md-4 text-center">
              <div class="card card_styling mb-4">
                <img src = "images/wallet.png" style="width:10em;" class="mb-3 what_we_do mx-auto my-auto">
                <h2 class="text-primary ">PURCHASE</h2>
                  <p class="wwd_writeup ">We can help you purchase any desired smartphone from outside the country and have it delivered to your doorsteps at a convenient price. We will make sure it is well packaged and delivered to you safely with a one year warranty in case you notice any damage on the item. </p>
                </div>
              </div>
            </div>
          </div>
        </section>


















































































































        <!-- <section id="our_brands"> -->
        <!-- <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/note10-2.jpg" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-dark">SAMSUNG GALAXY NOTE 10</h5>
          <p class=" samsung-text">This is the samsung's NOTE 10. It has a Samsung Exynos 9 Octa 9825 chipset, a Mali-G76 MP12 graphic, an Octa core (2.73 GHz, Dual core, M4 Mongoose + 2.4 GHz, Dual core, Cortex A75 + 1.9 GHz, Quad core, Cortex A55) processor, a 64 bit architecture and an 8gb ram. </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/iphoneXR.jpg" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>IPHONE XR</h5>
          <p>Apple's latest phone. This is the iphone XR. It has an Apple A12 Bionic processor. It comes in a variety of storage which are 64GB 3GB RAM, 128GB 3GB RAM, 256GB 3GB RAM. It has a Hexa-core (2x2.5 GHz Vortex + 4x1.6 GHz Tempest) CPU and an Apple GPU (4-core graphics) GPU.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/1+7pro.jpg" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>ONE PLUS 7 PRO</h5>
          <p>One Plus 7 pro is one of the best phones in the world. It has a snapdragon 855 CPU. It comes in RAM sizes of 6GB/8GB/12GB and ROM sizes of 128/256GB, a QHD+ resolution, an awesome camera with 48MP camera. You can get it for <br>128GB+6 GB RAM: $669 / 242, 847.00 Naira<br>
256GB+8GB RAM: $699 / 253,737.00 Naira<br>
256GB+12GB RAM: $749 /271,887.00 Naira</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/iphonexsmax.jpg" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/s10+.jpg" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/iphoneXR.jpg" class="d-block w-100 img-fluid" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

        </section> -->



          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          </body>
          </html>