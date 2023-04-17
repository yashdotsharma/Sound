<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'partials/_dbconnect1.php';
$email = $_POST["email"];
$username = $_POST["username"];
$feedback = $_POST["feedback"];
{
  $sql ="INSERT INTO `feedback` (`email`, `username`, `feedback`) VALUES ('$email', '$username', '$feedback')";
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="icon" href="./Images/h1.png" type="image/icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css">

    <title>Sound</title>

</head>
<body>


  
    <header>
      
        <div class="navbar">
            <a href="#home"><span>Sound</span></a>
            <ul class="nav-links">
              <li><a href="#productse">Earphones</a></li>
              <li><a href="#productsh">Headphones</a></li>
                <li><a href="#productss">Speakers</a></li>
                <div class="logo">
                    <a href="#cart"><button class="btn btn-outline-dark my-2 my-sm-0"><img src="./Images/Shopping Cart.png" alt=""></button></a>
                    <a href="./login.php"><button class="btn btn-outline-dark my-2 my-sm-0"><img src="./Images/Male User.png" alt=""></button></a>
                </div>
            </ul>
        </div>
    </header>
    
    <!-- <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#home">Sound</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/loginsystem/welcome.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/loginsystem/login.php">Earphones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/loginsystem/signup.php">Headphones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/loginsystem/logout.php">Speakers</a>
          </li>
          <div class="logo">
            <a href="#cart"><button class="btn btn-outline-dark my-2 my-sm-0"><img src="./Images/Shopping Cart.png" alt=""></button></a>
            <a href="#contact"><button class="btn btn-outline-dark my-2 my-sm-0"><img src="./Images/Male User.png" alt=""></button></a>
        </div>
          
        </ul>
      </div>
    </nav>
     -->

     <!-- <div class="welcome bg-dark p-3">
      <h1 class="welcome">Welcome - <?php echo $_SESSION['username']?></h1>
    </div> -->

    <section class="home" id="home">
    
        <div class="container container-fliud">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row col-sm-12">
                            <div class="text col-lg-6 col-sm-6">
                                    <h4>AirDopes 201</h4>
                                    <h3>Speakers</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Aspernatur, cupiditate! <br>Lorem ipsum dolor sit.</p>
                                 <a href="#productss"><button>Order Now</button></a>
                                </div>
                                <div class="image col-lg-6 col-sm-6">
                                    <img src="./Images/Home.png" alt="">
                                </div>    
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <div class="row col-sm-12">
                                <div class="text col-lg-6 col-sm-6">
                                    <h4>Rockers 502</h4>
                                    <h3>Headphones</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Aspernatur, cupiditate! <br>Lorem ipsum dolor sit.</p>
                                 <a href="#productsh"><button>Order Now</button></a>
                                </div>
                                <div class="image col-lg-6 col-sm-6">
                                    <img src="./Images/hhome.png" alt="">
                                </div>    
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row col-sm-12">
                                <div class="text col-lg-6 col-sm-6">
                                    <h4>Stone 776</h4>
                                    <h3>Speakers</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit. Aspernatur, cupiditate! <br>Lorem ipsum dolor sit.</p>
                                 <a href="#productss"><button>Order Now</button></a>
                                </div>
                                <div class="image col-lg-6 col-sm-6">
                                    <img src="./Images/s2.png" alt="">
                                </div>    
                            </div>
                        </div>


                        </div>

                </div>
            </div>
  
    </section>

    <section class="banner" id="banner">
      <div class="container container-fliud">
        <div class="text">
        <a class="d-flex"><img src="./Images/In Transit.png" alt=""><span>Fast Delivery</span></a>
        <a class="d-flex"><img src="./Images/Warranty.png" alt=""><span>1 Year Warranty</span></a>
        
      </div>
        <div class="text">
        <a class="d-flex"><img src="./Images/Transaction.png" alt=""><span>7 Days Return Policy</span></a>
        <a class="d-flex"><img src="./Images/Free Shipping.png" alt=""><span>Free Returns</span></a>
      </div>
        
      </div>
    </section>

    <section id="productse" class="products">
        <div class="container-fliud">
            <div class="slider">
              <div class="heading">
                <h2>Earphones</h2>
              </div>
                      <div class="owl-carousel">
                          <div class="card">
                            <div class="image">
                                  <img src="./Images/e6.png" alt="" >
                                </div>
                                <div class="text">
                              <h5 class="text-center">Airdopes 413 ANC</h5>
                              <div class="rate">
                              <a>$99</a>
                              <a><span>60% OFF</span></a>
                            </div>
                            <div class="specs">
                            <p>650 mAh</p>
                            <p>Bluetooth v5.0</p>
                            <p>IPX 68</p>
                          </div>
                            <p>Free Shipping Avilable</p>
                            <a href=""><button>Add To Cart</button></a>
                          </div>
                        </div>
                          <div class="card">
                            <div class="image">
                                  <img src="./Images/e4.png" alt="" >
                                </div>
                                <div class="text">
                              <h5 class="text-center">Airdopes 354 ANC</h5>
                              <div class="rate">
                              <a>$99</a>
                              <a><span>60% OFF</span></a>
                            </div>
                            <div class="specs">
                            <p>650 mAh</p>
                            <p>Bluetooth v5.0</p>
                            <p>IPX 68</p>
                          </div>
                            <p>Free Shipping Avilable</p>
                            <a href=""><button>Add To Cart</button></a>
                          </div>
                        </div>
                          <div class="card">
                            <div class="image">
                                  <img src="./Images/e2.png" alt="" >
                                </div>
                                <div class="text">
                              <h5 class="text-center">Airdopes 122 ANC</h5>
                              <div class="rate">
                              <a>$99</a>
                              <a><span>60% OFF</span></a>
                            </div>
                            <div class="specs">
                            <p>650 mAh</p>
                            <p>Bluetooth v5.0</p>
                            <p>IPX 68</p>
                          </div>
                            <p>Free Shipping Avilable</p>
                            <a href=""><button>Add To Cart</button></a>
                          </div>
                        </div>
                          <div class="card">
                            <div class="image">
                                  <img src="./Images/e1.png" alt="" >
                                </div>
                                <div class="text">
                              <h5 class="text-center">Airdopes 453 ANC</h5>
                              <div class="rate">
                              <a>$99</a>
                              <a><span>60% OFF</span></a>
                            </div>
                            <div class="specs">
                            <p>650 mAh</p>
                            <p>Bluetooth v5.0</p>
                            <p>IPX 68</p>
                          </div>
                            <p>Free Shipping Avilable</p>
                            <a href=""><button>Add To Cart</button></a>
                          </div>
                        </div>
                          <div class="card">
                            <div class="image">
                                  <img src="./Images/e3.png" alt="" >
                                </div>
                                <div class="text">
                              <h5 class="text-center">Airdopes 323 ANC</h5>
                              <div class="rate">
                              <a>$99</a>
                              <a><span>60% OFF</span></a>
                            </div>
                            <div class="specs">
                            <p>650 mAh</p>
                            <p>Bluetooth v5.0</p>
                            <p>IPX 68</p>
                          </div>
                            <p>Free Shipping Avilable</p>
                            <a href=""><button>Add To Cart</button></a>
                          </div>
                        </div>
                          <div class="card">
                            <div class="image">
                                  <img src="./Images/e5.png" alt="" >
                                </div>
                                <div class="text">
                              <h5 class="text-center">Airdopes 555 ANC</h5>
                              <div class="rate">
                              <a>$99</a>
                              <a><span>60% OFF</span></a>
                            </div>
                            <div class="specs">
                            <p>650 mAh</p>
                            <p>Bluetooth v5.0</p>
                            <p>IPX 68</p>
                          </div>
                            <p>Free Shipping Avilable</p>
                            <a href=""><button>Add To Cart</button></a>
                          </div>
                        </div>
                          
                        
                      </div>
                      
                  </div>
        </div>
      </section>

      
    <section id="productsh" class="products">
        <div class="container-fliud">
            <div class="slider">
              <div class="heading">
                <h2>Headphones </h2>
              </div>
              <div class="owl-carousel">
                <div class="card">
                  <div class="image">
                        <img src="./Images/h6.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Rockerz 210</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                <div class="card">
                  <div class="image">
                        <img src="./Images/h4.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Rockerz 420</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                <div class="card">
                  <div class="image">
                        <img src="./Images/h2.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Rockerz 348</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                <div class="card">
                  <div class="image">
                        <img src="./Images/hhome.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Rockerz 520</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                <div class="card">
                  <div class="image">
                        <img src="./Images/h3.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Rockerz 660</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                <div class="card">
                  <div class="image">
                        <img src="./Images/h5.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Rockerz 112</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                
            </div>
                      
          </div>
        </div>
      </section>

      
    <section id="productss" class="products">
        <div class="container-fliud">
            <div class="slider">
              <div class="heading">
                <h2>Speakers</h2>
              </div>
              <div class="owl-carousel">
                <div class="card">
                  <div class="image">
                        <img src="./Images/s6.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Stone 764 v2</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                <div class="card">
                  <div class="image">
                        <img src="./Images/s4.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Stone 234</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                <div class="card">
                  <div class="image">
                        <img src="./Images/s2.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Stone 776</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                <div class="card">
                  <div class="image">
                        <img src="./Images/s1.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Stone 223</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                <div class="card">
                  <div class="image">
                        <img src="./Images/s3.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Stone 657</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                <div class="card">
                  <div class="image">
                        <img src="./Images/s5.png" alt="" >
                      </div>
                      <div class="text">
                    <h5 class="text-center">Stone 232</h5>
                    <div class="rate">
                    <a>$99</a>
                    <a><span>60% OFF</span></a>
                  </div>
                  <div class="specs">
                  <p>650 mAh</p>
                  <p>Bluetooth v5.0</p>
                  <p>IPX 68</p>
                </div>
                  <p>Free Shipping Avilable</p>
                  <a href=""><button>Add To Cart</button></a>
                </div>
              </div>
                
              
            </div>
                      
                  </div>
        </div>
      </section>



<section class="feedback" id="feedback">
        <div class="container container-fliud">

          <div class="row">
            <div class="form col col-sm-5">
              <form action="/sound/index.php" method="post" class="p-3">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="form-group mb-3">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group mb-3">
                  <label for="feedback">Your Feedback</label>
                  <input type="text" class="form-control" id="feedback" name="feedback">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>

                <div class="col col-sm-5 sale align-item-center carousel slide" id="carouselExampleSlidesOnly"  data-bs-ride="carousel">
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                                    <img src="./Images/banner1.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                                    <img src="./Images/banner2.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                                    <img src="./Images/banner3.jpg" alt="">
                        </div>
                        <div class="carousel-item">
                                    <img src="./Images/banner4.jpg" alt="">
                        </div>
                      </div>

                </div>

              </div>

            </div>
  
    </section>







    










<!-- -------------------------- JavaScript ---------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
      <script src="./js/owl.carousel.min.js"></script>
      <script src="./js/script.js"></script>


</body>
</html>