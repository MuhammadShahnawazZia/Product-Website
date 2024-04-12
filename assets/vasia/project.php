<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Vasia</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/40e5285b11.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="assets/css/mystyle.css">
      

   </head>
   <body>
      <div class="container-fluid bg">
         <div class="row">
            <div class="col-md-12">
               <nav class="nav">
                  <a class="nav-link active color" aria-current="page" href="#"><i class="fa-brands fa-facebook"></i></a>
                  <a class="nav-link active color" aria-current="page" href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a class="nav-link active color" aria-current="page" href="#"><i class="fa-brands fa-youtube"></i></a>
                  <a class="nav-link active color" aria-current="page" href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a class="nav-link active color" aria-current="page" href="#"><i class="fa-light fa-phone"></i></a>
                  <a class="nav-link active color rightside" aria-current="page" href="#">+6868866888</a>
                  <a class="nav-link active color " aria-current="page" href="#">Register 
                  Sign In</a>
                  <a class="nav-link active color" aria-current="page" href="#">USD $ </a>
                  <a class="nav-link active color" aria-current="page" href="#"> English </a>
               </nav>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <nav class="navbar navbar-expand-md navbar-blue bg-green">
               <div class="container-fluid">
                  <a class="navbar-brand side inspiron-green  rightsid" href="#"><img class="" src='vasia.jpg' alt="Logo" width="150" height="50" ></a>
                  <button class="navbar-toggler botton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon menu"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarBasic">
                     <ul class="navbar-nav me-auto mb-2 mb-xl-0 ">
                        <li class="nav-item heading hy">
                           <a class="nav-link active " aria-current="page" href="#C1"><span class="colour">Home</span></a>
                        </li>
                        <li class="nav-item m ">
                           <a class="nav-link active" aria-current="page" href="#C2"><span class="colour">Fashion</span></a>
                        <li class="nav-item ">
                           <a class="nav-link active" aria-current="page" href="#C3"><span class="colour">Features </span></a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link active" aria-current="page" href="#C4"><span class="colour">Flyout Menu </span></a>
                        </li>
                        <li class="nav-item searchside ">
                           <a class="nav-link active" aria-current="page" href="#C5"><span class="colour">About Us</span></a>
                        </li>
                        <li class="nav-item phoneside ">
                           <a class="nav-link active" aria-current="page" href="#C5"><span class="colour"><i class="fa-solid fa-magnifying-glass"></i></span></a>
                        </li>
                        <li class="nav-item  ">
                           <a class="nav-link active" aria-current="page" href="#C5"><span class="colour"><i class="fa-regular fa-rotate"></i></span></a>
                        </li>
                        <li class="nav-item phoneside ">
                           <a class="nav-link active" aria-current="page" href="#C5"><span class="colour"><i class="fa-regular fa-heart"></i></span></a>
                        </li>
                        <li class="nav-item phoneside ">
                           <a class="nav-link active" aria-current="page" href="#C5"><span class="colour"><i class="fa-regular fa-briefcase-blank"></i></span></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <img class="img-fluid " src="banner.png" alt="Logo">
            </div>
         </div>
      </div>
      <div class="container-fluid">
      <div class="row">
      <?php if ($result) {
      foreach ($result as $key => $value) { ?>
      <div class="col-md-12">
         <div class="row">
            <div class="col-md-3">
               <a href="http://localhost/vasia/vasai_details.php"  target="_blank"><img src="dress.png" alt="dress"></a>
               <p><?=$value['product_title'];?><br> $19.12</p>
            </div>
            <div class="col-md-3">
               <a class="img-responsive second-image animation1 ls-is-cached lazyloaded" href="http://localhost/vasia/p.php"><img src="tshirt.png"></a>
               HUMINGBIRD PRINTED SWEATER OVERSIZED <br>$18.90
            </div>
            <div class="col-md-3">
               <img src="shirt.png">
               <p>GREEN BLOTCH CHECK SHAKET <br>$29.00</p>
            </div>
            <div class="col-md-3">
               <img src="tshirt.png">
               HUMINGBIRD PRINTED SWEATER OVERSIZED <br>$18.90
            </div>
            <div class="col-md-3">
               <img src="pi.png">
               <p>PINK SCARF PRINT REVERE SHIRT<br>$29.00</p>
            </div>
            <div class="col-md-3">
               <img src="mid.png">
               <p>LONG-SLEEVE POPOVER SHIRT <br>$29.00</p>
            </div>
            <div class="col-md-3">
               <img src="las.png">
               <p>SLIM-FIT LONG-SLEEVE SHIRT<br>$11.90</p>
            </div>
            <div class="col-md-3">
               <img src="pi.png">
               <p>PINK SCARF PRINT REVERE SHIRT<br>$29.00</p>
            </div>
            <div class="col-md-3">
               <img src="tshirt.png">
               <p>MEN POCKETABLE PARKA<br>$11.90</p>
            </div>
            <div class="col-md-3">
               <img src="las.png">
               <p>RELAXED-FIT CREW NECK T-SHIRT<br>$9.00</p>
            </div>
            <div class="col-md-3">
               <img src="brown.png">
               <p>BROADCLOTH LONG-SLEEVE SHIRT<br>$9.00</p>
            </div>
               <div class="col-md-3">
               <img src="las.png">
               <p>RELAXED-FIT CREW NECK T-SHIRT<br>$9.00</p>
            </div>
            <div class="col-md-3">
               <img src="last.png">
               <p>BROADCLOTH LONG-SLEEVE SHIRT<br>$9.00</p>
            </div>
            <div class="col-md-3">
               <img src="mii.png">
               <p>BROADCLOTH LONG-SLEEVE SHIRT<br>$9.00</p>
            </div>
            <div class="col-md-3">
               <img src="shirt.png">
               <p>BROADCLOTH LONG-SLEEVE SHIRT<br>$9.00</p>
            </div>
              <div class="col-md-3">
               <img src="shirt.png">
               <p>BROADCLOTH LONG-SLEEVE SHIRT<br>$9.00</p>
            </div>
         </div>
      </div>
   <?php } } ?>
      <div class="container-fluid grey">
         <div class="row okay">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-md-3">
                     <h4>Information</h4>
                     <p class="mb-2">
                        Delivery<br>
                     </p>
                     <p class="mb-2">
                        Secure Payment<br>
                     </p>
                     Contact Us<br></p>
                     Sitemap<br></p>
                     Stores<br></p>
                     </p>  
                  </div>
                  <div class="col-md-3">
                     <h4>Custom Links</h4>
                     <p class="mb-2">
                        Legal Notice<br>
                     </p>
                     <p class="mb-2">
                        Prices Drop<br>
                     </p>
                     <p class="mb-2">
                        New Products<br>
                     </p>
                     <p class="mb-2">
                        Best Sales<br>
                     </p>
                     <p class="mb-2">
                        Login<br>
                     </p>
                     </p>    
                  </div>
                  <div class="col-md-3">
                     <h4>My Account</h4>
                     <p class="mb-2">
                        Personal Info<br>
                     <p class="mb-2">
                        Orders<br>
                     </p>
                     <p class="mb-2">
                        Credit Slips<br>
                     </p>
                     <p class="mb-2">
                        Addresses<br>
                     </p>
                     <p class="mb-2">
                        Vouchers<br>
                     </p>
                     </p>    
                  </div>
                  <div class="col-md-3">
                     <h4>Follow Us</h4>
                     <p class="mb-2">
                        Facebook<br>
                     </p>
                     <p class="mb-2">
                        Twitter<br>
                     </p>
                     <p class="mb-2">
                        YouTube<br>
                     </p>
                     <p class="mb-2">
                        Pinterest<br>
                     </p>
                     <p class="mb-2">
                        Instagram<br>
                     </p>
                     </p>    
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
        <div class="row background">
          <div class="col-md-12 ">
            <div class="team">
                <p>Copyright © Posthemes. All Rights Reserved <span class="side">Privacy & Policy Customer Support Accessibility</span></p>
            </div>
          
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html>


         
  